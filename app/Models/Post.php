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

    public function Commentaire():HasMany 
    {
        return $this->hasMany(Commentaire::class);

    }
    public function User():BelongsTo 
    {
        return $this->BelongsTo(User::class);

    }
    public function Hashtag():HasMany 
    {
        return $this->HasMany(Hashtag::class);

    }
    public function Like():HasMany 
    {
        return $this->HasMany(Like::class);

    }
}
