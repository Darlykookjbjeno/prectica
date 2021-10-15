<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'identification',
        'name',
        'last_name',
        'email',
        'password',
        'telephone',
        'session',
        'role_id',
        'session_id'
    ];

    protected $hidden = [
        'password',
        'created_at',
        'updated_at'
    ];
}
