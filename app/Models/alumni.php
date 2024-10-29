<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim', 
        'nama_lengkap', 
        'tanggal_lahir', 
        'jenis_kelamin', 
        'alamat', 
        'email', 
        'no_hp', 
        'tahun_lulus', 
        'jurusan', 
        'ipk'
    ];

    // Relasi dengan model Pekerjaan
    public function pekerjaan()
    {
        return $this->hasMany(Pekerjaan::class);
    }

    // Relasi dengan model KontakDarurat
    public function kontakDarurat()
    {
        return $this->hasMany(KontakDarurat::class);
    }

    // Menambahkan Alumni baru
    public static function createAlumni(array $data)
    {
        return self::create($data);
    }

    // Mengambil semua alumni
    public static function getAllAlumni()
    {
        return self::all();
    }

    // Mengupdate Alumni
    public function updateAlumni(array $data)
    {
        return $this->update($data);
    }

    // Menghapus Alumni
    public function deleteAlumni()
    {
        return $this->delete();
    }
}
