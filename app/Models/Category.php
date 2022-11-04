<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function libros(){
        return $this->hasOne(Book::class);
    }
    protected $fillable = [
        'name'
        ];
}
