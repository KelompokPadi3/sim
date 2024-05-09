<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    protected $fillable = [
        'nama_mahasiswa',
        'alamat_mahasiswa',
        'nomor_telepon',
        'email_mahasiswa',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'status_id'
    ];
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
}
