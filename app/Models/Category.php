<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function libro(){
        return $this->belongsTo(Book::class); //Pertenece a una categoria.
    }

    protected $fillable = [
        'name'
        ];
}
