<?php

namespace App\Models;

use App\Scopes\StudentScope;
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
        static::addGlobalScope(new StudentScope);
    }
    public $timestamps = false;
}
