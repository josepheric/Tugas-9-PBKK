<?php

namespace App\Models;

use CodeIgniter\Model;

class MhsModel extends Model
{
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'NRP';

    protected $useAutoIncrement = false;
    protected $allowedFields = ['NRP', 'Nama', 'Alamat', 'NoHP', 'Jurusan'];
}