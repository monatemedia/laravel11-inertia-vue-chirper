<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;

    /**
     * Enable mass assignment for the message attribute
     */
    protected $fillable = [
        'message',
    ];
}
