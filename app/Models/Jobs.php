<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    protected $table = 'jobs';
    protected $primaryKey = 'id_jobs';
    public $incrementing = true;
    protected $fillable =
    ['nama_perusahaan',
    'nama_pekerjaan',
    'deskripsi',
    'syarat',
    'gaji'];
    public $timestamps = false;
}
