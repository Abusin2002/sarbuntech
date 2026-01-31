<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enquire extends Model
{
    use HasFactory;

    // Fillable fields
    protected $fillable = [
        'name',
        'mobile',
        'subject',
        'service',
        'message',
    ];
}
