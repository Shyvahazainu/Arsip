<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataArsip extends Model
{
    use HasFactory;
    protected $table = 'data_arsip';

    protected $fillable = [
        'pengupload', 'bidang', 'dok', 'perkara', 'locus', 'tahun', 'file', 'jenis_file',
    ];
}
