<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formdata extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'number',
        'password',
        'file'
    ];
}
