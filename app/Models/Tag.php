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

    public function tags(): BelongsToMany{
        return $this->belongsToMany(Book::class,'tag_book');
    }
    public function getSlug(): string{
        return Str::slug($this->title);
    }
}
