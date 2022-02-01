<?php

namespace App;

use DateTimeInterface;
use Eloquent as Model;

class Resume extends Model
{
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'g-recaptcha-response' => 'recaptcha',
        'name'                 => 'required',
        'email'                => 'required|email',
        'phone'                => 'required',
        'resume'               => 'required',
    ];

    public $table = 'resumes';
    public $guarded = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name'          => 'string',
        'phone'         => 'string',
        'email'         => 'string',
        'resume'        => 'string',
        'observations'  => 'string',
        'url_cv'        => 'string',
    ];

    /**
     * Prepare a date for array / JSON serialization.
     *
     * @param  DateTimeInterface  $date
     * @return string
     */
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d/m/Y H:i:s');
    }
}