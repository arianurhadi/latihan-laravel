<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // public function book()
    // {
    //     return $this->belongsTo(Book::class, 'category_id'); // foreign key dari category_id
    // }

    public $timestamps = false;
    
    public function books() {
        return $this->hasMany(Book::class);
    }
}
