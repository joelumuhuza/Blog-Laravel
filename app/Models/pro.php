<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pro extends Model
{
    protected $fillabe=[
        'title',
        'description'
    ];
    use HasFactory;
}
