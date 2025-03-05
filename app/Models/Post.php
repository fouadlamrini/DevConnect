<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    protected $fillable = [
        'user_id',
        'hashtag_id',
        'content',
        'code_snippet',
        'image',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function commentaires() {
        return $this->hasMany(Commentaires::class);
    }


    public function likes() {
        return $this->hasMany(Like::class);
    }

 
    public function hashtags() {
        return $this->belongsToMany(Hashtag::class);
    }
}
