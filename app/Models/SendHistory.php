<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendHistory extends Model
{
    use HasFactory;

    protected $fillable = ['message', 'to'];

    protected $casts = [
        'to' => 'array', // Automatically cast the JSON field to an array
    ];
}
