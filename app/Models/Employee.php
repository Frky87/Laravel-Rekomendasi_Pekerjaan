<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $primaryKey = 'id_employees';
    public $incrementing = true;
    protected $fillable =
    ['gambar',
    'nama_lengkap',
    'jenis_kelamin',
    'alamat',
    'pendidikan_terakhir',
    'keahlian'];
    public $timestamps = false;

}
