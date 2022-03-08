<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function book(){
        return $this->all();
    }

    public function category() {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function users() {
        return $this->belongsToMany(User::class);
    }

    public function reviews(){
        return $this->morphMany(Review::class, 'reviewable');
    }

}
