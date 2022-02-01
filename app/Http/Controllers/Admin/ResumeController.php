<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ResumeDataTable;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateResumeRequest;
use App\Repositories\ResumeRepository;
use Auth;
use Str;
use Exception;
use Flash;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Response;

class ResumeController extends AppBaseController
{
    /** @var  ResumeRepository */
    private $resumeRepository;

    public function __construct(ResumeRepository $resumeRepo)
    {
        $this->resumeRepository = $resumeRepo;
    }

    /**
     * Display a listing of the Resume.
     *
     * @param  ResumeDataTable  $resumeDataTable
     * @return Response
     */
    public function index(ResumeDataTable $resumeDataTable)
    {
        $user = Auth::user();
        return $resumeDataTable->render('admin.resumes.index', compact('user'));
    }

    /**
     * Store a newly created Resume in storage.
     *
     * @param  CreateResumeRequest  $request
     * @return RedirectResponse|JsonResponse
     */
    public function store(CreateResumeRequest $request)
    {
        $input = $request->except('g-recaptcha-response');

        if($request->file('resume')) 
        {
            $file = $request->file('resume');
            $filename = 'cv_' . Str::lower($request->input('name')) . '_'.time().'.' . $request->file('resume')->extension();
            $filePath = public_path() . '/resumes/';
            $file->move($filePath, $filename);
        }

        $input['resume'] = $filename;
        $input['url_cv'] = asset("resumes/{$filename}");
        
        $resume = $this->resumeRepository->create($input);

        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'Currículo enviado com sucesso.']);
        }

        Flash::success('Currículo salvo com sucesso.');
        return redirect(route('admin.resumes.index'));
    }

    /**
     * Display the specified Resume.
     *
     * @param  int  $id
     *
     * @return View|RedirectResponse
     */
    public function show($id)
    {
        $user = Auth::user();
        $resume = $this->resumeRepository->find($id);

        if (empty($resume)) {
            Flash::error('Currículo não encontrado.');

            return redirect(route('admin.resumes.index'));
        }

        return view('admin.resumes.show', compact('resume', 'user'));
    }

    /**
     * Remove the specified Resume from storage.
     *
     * @param  int  $id
     *
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy($id)
    {
        $resume = $this->resumeRepository->find($id);

        if (empty($resume)) {
            Flash::error('Currículo não encontrado');

            return redirect(route('admin.resumes.index'));
        }

        $this->resumeRepository->delete($id);

        Flash::success('Currículo excluído com sucesso.');

        return redirect(route('admin.resumes.index'));
    }
}
