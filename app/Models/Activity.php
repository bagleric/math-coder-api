<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['user_id', 'activity_id', 'module_id', 'started_at', 'ended_at', 'no_of_compiles', 'completed', 'compilation_timestamps', 'screen_size'];
//    public function setStartedAtAttribute($value)
//    {
//        $this['started_at'] = Carbon::parse($value);
//    }
//    public function setEndedAtAttribute($value)
//    {
//        $this['ended_at'] = Carbon::parse($value);
//    }
}
