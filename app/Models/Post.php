<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts'; // menentukan tabel yang digunakan 
    protected $fillable = ['title', 'slug', 'author', 'image', 'content'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    
    public function scopeSearch(Builder $query): void
    {
        $query->where('title' , 'like' , '%' . request('search') . '%');
    }
}
