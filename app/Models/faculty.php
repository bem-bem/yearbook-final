<?php

namespace App\Models;

use App\Scopes\FacultyScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'name', 'image', 'job', 'job_description', 'schoolyear'
    ];
    public static function boot()
    {
        parent::boot();
        static::addGlobalScope(new FacultyScope);
    }
    public $timestamps = false;
}
