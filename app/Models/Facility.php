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
        'harga'
        // 'category'
    ];

    public function getByCategory($category)
    {
        $facilities = Facility::where('category_id', $category)->get();
        return $facilities;
    }
    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
