<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\CreateSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use App\Repositories\SettingRepository;

use App\User;
use Auth;

class SettingController extends Controller
{
    /** @var  SettingRepository */
    private $settingRepository;

    public function __construct(SettingRepository $settingRepo)
    {
        $this->settingRepository = $settingRepo;
    }

    /**
     * Show the settings.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $setting = $this->settingRepository->all();
        
        return view('admin.settings.index', compact('setting'));
    }

    /**
     * Show the form for editing the specified Setting.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(int $id)
    {
        $setting = $this->settingRepository->find($id);

        if (empty($setting)) {
            Flash::error('Configuração não encontrada');
            return redirect(route('admin.settings.index', null));
        }

        return view('admin.settings.index', compact('setting'));
    }

    /**
     * Update the specified Setting in storage.
     *
     * @param  UpdateSettingRequest  $request
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     * @throws \Throwable
     */
    public function update(UpdateSettingRequest $request)
    {
        
        $setting = $this->settingRepository->update_repository($request->except('_token'));

        // if (empty($setting)) {
        //     Flash::error('Configurações não encontrado');
        //     return redirect(route('admin.settings.index'));
        // }

        return redirect(route('admin.settings'));
    }
}