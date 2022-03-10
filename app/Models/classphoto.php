<?php

namespace App\Models;

use App\Scopes\LatestScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classphoto extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'image', 'section', 'yearlevel', 'course', 'schoolyear',
    ];
    public static function boot()
    {
        parent::boot();
        static::addGlobalScope(new LatestScope);
    }
    public $timestamps = false;
}
