<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'book';
    public function Author(){
        return $this->belongsTo(Author::class);
    }
    public function Category(){
        return $this->belongsTo(Category::class);
    }
    public function Review(){
        return $this->hasMany(Review::class);
    }
    public function Discount(){
        return $this->hasMany(Discount::class);
    }
}
