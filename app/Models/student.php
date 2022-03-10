<?php

namespace App\Models;

use App\Scopes\LatestScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'name', 'image', 'section', 'yearlevel', 'course', 'schoolyear', 'birthday', 'goal', 'motto', 'awards'
    ];
    public static function boot()
    {
        parent::boot();
        static::addGlobalScope(new LatestScope);
    }
    public $timestamps = false;
}
