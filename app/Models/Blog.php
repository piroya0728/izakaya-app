<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function cats()
    {
        return $this->BelongsToMany(Cat::class)->withTimestamps();
    }
}
