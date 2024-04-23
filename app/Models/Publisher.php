<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Publisher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'link'
    ];
    
    public function books(): HasMany{
        return $this->hasMany(Book::class);
    }
    public function getSlug(): string{
        return Str::slug($this->title);
    }
}
