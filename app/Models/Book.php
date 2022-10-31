<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function categoria(){
        return $this->belongsTo(Category::class); //Pertenece a una categoria.
    }
    public function etiquetas(){
        return $this->belongsToMany(Tag::class); //Pertenece a Muchas a muchas etiquetas.
    }

    protected $fillable = [
        'title',
        'description',
        'content',
        'date'
        ];

}
