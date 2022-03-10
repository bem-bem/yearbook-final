<?php

namespace App\Models;

use App\Scopes\LatestScope;
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
        static::addGlobalScope(new LatestScope);
    }
    public $timestamps = false;
}
