<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    //
    public $table = 'email_directory';

    protected $fillable = [
        'name', 'surname', 'email'
    ];
}
