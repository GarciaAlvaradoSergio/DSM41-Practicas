<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;
    
    public function categoria(){
        return $this->hasOne(Category::class, 'id', 'category_id'  );
    }
    public function estudiante(){
        return $this->hasOne(User::class, 'id','user_id');
    }

    public function etiquetas(){
        return $this->belongsToMany(Tag::class); //Pertenece a Muchas a muchas etiquetas.
    }

    protected $fillable = [
        'title',
        'description',
        'content',
        'date',
        'category_id',
        'user_id'
        ];

}
