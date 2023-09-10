<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;
    protected $table = 'pengumuman';
    protected $fillable = [
        'tanggal',
        'tanggalselesai',
        'keterangantempat',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function mahasiswa()
    {
        return $this->belongsTo(DataMahasiswa::class, 'user_id', 'user_id');
    }

}
