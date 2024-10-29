<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KontakDarurat extends Model
{
    use HasFactory;

    protected $fillable = [
        'alumni_id', 
        'nama_kontak', 
        'hubungan', 
        'no_hp', 
        'alamat'
    ];

    // Relasi dengan model Alumni
    public function alumni()
    {
        return $this->belongsTo(Alumni::class);
    }

    // Menambahkan kontak darurat baru
    public static function createKontakDarurat(array $data)
    {
        return self::create($data);
    }

    // Mengambil semua kontak darurat
    public static function getAllKontakDarurat()
    {
        return self::all();
    }

    // Mengupdate kontak darurat
    public function updateKontakDarurat(array $data)
    {
        return $this->update($data);
    }

    // Menghapus kontak darurat
    public function deleteKontakDarurat()
    {
        return $this->delete();
    }
}
