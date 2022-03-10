<?php

namespace App\Models;

use App\Scopes\LatestScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public $timestamps = false;
    public static function boot()
    {
        parent::boot();
        static::addGlobalScope(new LatestScope);
    }
}
