<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'photo',
        'category'
    ];

    public function getByCategory($category)
    {
        $facilities = Facility::where('category', $category)->get();
        return $facilities;
    }
    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }
}
