<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasPemesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'facility_id',
        'kelas_id',
        'tanggal_pemesanan',
        'status',
        'nama_file',
        'file_path',
        'nomor_tlp',
        'note',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }
}
