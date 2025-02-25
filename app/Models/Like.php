<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Like extends Model
{
    /** @use HasFactory<\Database\Factories\LikeFactory> */
    use HasFactory;
    protected $fillable = [
       
    ];
    public function User():BelongsTo 
    {
        return $this->BelongsTo(User::class);

    }
    public function Post():BelongsTo 
    {
        return $this->BelongsTo(Post::class);

    }
}
