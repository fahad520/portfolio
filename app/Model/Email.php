<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'email', 'tag'
    ];
}
