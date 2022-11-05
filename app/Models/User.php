<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'password'
    ];
    public function libro(){
        return $this->belongsTo(Book::class); //Pertenece a una categoria.
    }
}
