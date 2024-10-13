<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $table = "categories"; // menentukan tabel yang digunakan

    public $timestamps = false;

    protected $fillable = ['name', 'slug'];


    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
    
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
