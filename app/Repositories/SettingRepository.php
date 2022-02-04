<?php

namespace App\Repositories;

use App\Setting;
use App\Repositories\BaseRepository;

/**
 * Class SettingRepository
 * @package App\Repositories
 * @version July 16, 2021, 6:12 pm -03
*/

class SettingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [

    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    public function update_repository($request) {
        foreach ($request as $key => $input) {
            $query = $this->model->newQuery();
            $model = $query->where('key', $key)->first();
            $model->fill(['value' => $input]);
            $model->save();
        }

        return $model;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Setting::class;
    }
}

// foreach ($request as $key => $input) {
            
//     $query = $this->model->newQuery();

//     $model = $query->where('key', $key)->first();
    
//     $model->fill($input);

//     $model->save();
// }