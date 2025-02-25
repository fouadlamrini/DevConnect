<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Commentaire extends Model
{
    /** @use HasFactory<\Database\Factories\CommentaireFactory> */
    use HasFactory;
    protected $fillable = [
        'content',
        'email',
        'password',
    ];

    public function User():BelongsTo 
    {
        return $this->belongsTo(User::class);

    }

    public function Post():BelongsTo 
    {
        return $this->belongsTo(Post::class);

    }

}
