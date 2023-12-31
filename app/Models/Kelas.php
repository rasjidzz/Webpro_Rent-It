<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }
    public function getKelasbyFacilityId($facility_id)
    {
        $kelas = Kelas::where('id_facility', $facility_id)->get();
        return $kelas;
    }
}
