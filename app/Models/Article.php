<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'content_detail', 'created_at'];

    // Relasi Many-to-Many ke Tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
