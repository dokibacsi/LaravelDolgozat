<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participate extends Model
{
    protected $fillable = [
        'present',
        'event_id',
        'user_id'
    ];
}
