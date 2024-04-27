<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'thumbnail_link',
        'book_link',
        'publisher_id',
        'size',
        'available'
    ];
    
    public function publisher(): BelongsTo{
        return $this->belongsTo(Publisher::class);
    }
    public function tags(): BelongsToMany{
        return $this->belongsToMany(Tag::class,'book_tag');
    }
    public function getSlug(): string{
        return Str::slug($this->title);
    }
}
