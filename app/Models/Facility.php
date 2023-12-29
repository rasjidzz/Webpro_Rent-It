<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;
    public $timestamp = true;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'category_id',
        'image',
        'price'
    ];

    public function getByCategory($category)
    {
        $facilities = Facility::where('category_id', $category)->get();
        return $facilities;
    }
    public function getByID($facility_id)
    {
        $facility = Facility::where('id', $facility_id)->first();
        return $facility;
    }
    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
