<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatkulModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'user_id',
        'prodi_id',
        'semester'
    ];
}
