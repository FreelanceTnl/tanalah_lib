<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function books(): BelongsToMany{
        return $this->belongsToMany(Book::class,'book_tag');
    }
    public function getSlug(): string{
        return Str::slug($this->title);
    }
}
