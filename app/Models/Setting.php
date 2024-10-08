<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'mail',
        'address',
        'phone',
        'system_title',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'logo',
        'favicon',
    ];

    protected $gurd = [];

}
