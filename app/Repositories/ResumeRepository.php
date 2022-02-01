<?php

namespace App\Repositories;

use App\Resume;
use App\Repositories\BaseRepository;

/**
 * Class ResumeRepository
 * @package App\Repositories
 * @version July 16, 2021, 6:12 pm -03
*/

class ResumeRepository extends BaseRepository
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

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Resume::class;
    }
}
