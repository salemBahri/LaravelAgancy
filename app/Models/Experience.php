<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    // In the Experience model
    protected $guarded = [];
protected $casts = [
    'technologies_used' => 'array',
];
}
