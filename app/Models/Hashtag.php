<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hashtag extends Model
{
    /** @use HasFactory<\Database\Factories\HashtagFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        
    ];
    public function Post():HasMany 
    {
        return $this->HasMany(Post::class);

    }
}
