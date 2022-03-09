<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schooleventimages extends Model
{
    use HasFactory;
    protected $fillable = ['schoolevent_id','image'];
    public $timestamps = false;

    public function schoolEvent()
    {
        return $this->belongsTo(schoolevent::class);
    }
}
