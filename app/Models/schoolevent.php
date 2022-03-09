<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schoolevent extends Model
{
    use HasFactory;
    protected $fillable = ['title'];
  
    public function schoolEventImages()
    {
        return $this->hasMany(schooleventimages::class);
    }

}
