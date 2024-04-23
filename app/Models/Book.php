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
        'description',
        'thumbnail',
        'link',
        'publisher_id',
        'page_number',
        'available'
    ];
    
    public function publisher(): BelongsTo{
        return $this->belongsTo(Publisher::class);
    }
    public function tags(): BelongsToMany{
        return $this->belongsToMany(Tag::class,'tag_book');
    }
    public function getSlug(): string{
        return Str::slug($this->title);
    }
}
