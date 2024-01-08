<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $fillable = [
        'user_id',
        'facility_id',
        'tanggal_pemesanan',
        'status',
        'nama_file',
        'file_path',
        'nomor_tlp',
        'note',
    ];

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }
    public function getApprovedRejectedCompletedActive()
    {
        return $this->whereIn('status', ['approved', 'rejected', 'completed', 'active'])->get();
    }
    public function countTotal($type)
    {
        if ($type === 'submission') {
            return $this->where('status', 'Waiting')->count();
        } elseif ($type === 'history') {
            return $this->whereIn('status', ['approved', 'rejected'])->count();
        } elseif ($type === 'cancel') {
            return $this->where('status', 'canceled')->count();
        }else {
            return 0;
        }
    }
}
