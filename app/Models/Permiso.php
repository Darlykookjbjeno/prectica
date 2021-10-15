<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;

    protected $fillable = [
        'permission_name',
        'role_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
