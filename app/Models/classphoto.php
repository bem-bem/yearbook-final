<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classphoto extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'image', 'section', 'yearlevel', 'course', 'schoolyear',
    ];
    public $timestamps = false;
}
