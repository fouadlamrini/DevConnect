<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ConnectionRequest extends Model
{
    /** @use HasFactory<\Database\Factories\ConnectionRequestFactory> */
    use HasFactory;
    protected $fillable = [
     
    ];

    public function User():BelongsTo 
    {
        return $this->BelongsTo(User::class);

    }

}
