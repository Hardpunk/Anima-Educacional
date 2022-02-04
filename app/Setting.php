<?php

namespace App;

use DateTimeInterface;
use Eloquent as Model;

class Setting extends Model
{
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'interest_installment'         => 'required'
    ];

    public $table = 'settings';
    public $guarded = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        //'value'         => 'string'
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