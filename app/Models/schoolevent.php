<?php

namespace App\Models;

use App\Scopes\LatestScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schoolevent extends Model
{
    use HasFactory;
    protected $fillable = ['title','event_date'];
    
    public static function boot()
    {
        parent::boot();
        static::addGlobalScope(new LatestScope);
    }

    public $timestamps = false;
  
    public function schoolEventImages()
    {
        return $this->hasMany(schooleventimages::class);
    }

}
