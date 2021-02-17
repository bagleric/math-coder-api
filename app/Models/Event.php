<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable=['user_id', 'activity_id', 'module_id','created_at'];
//    public function setCreatedAtAttribute($value)
//    {
//        $this['created_at'] = Carbon::parse($value);
//    }
}
