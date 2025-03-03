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
        'user_id',
        'post_id',
       
    ];
    public function User():belongsTo 
    {
        return $this->belongsTo(User::class);

    }
    public function Post():belongsTo 
    {
        return $this->belongsTo(Post::class);

    }
}
