<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    protected $fillable = [
        'answer',
        'user_agent',
        'ip_address',
    ];
}
