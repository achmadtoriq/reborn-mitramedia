<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Relasi Many-to-Many ke Articles
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
