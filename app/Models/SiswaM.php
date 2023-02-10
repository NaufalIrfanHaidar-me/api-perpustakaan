<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaM extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = [
        'nis', 'namalengkap', 'jk', 'kelas', 'nowa', 'email'
    ];
}
