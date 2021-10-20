<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'matkul_id',
        'judul_materi',
        'file_materi',
        'jenis_materi',
    ];

}
