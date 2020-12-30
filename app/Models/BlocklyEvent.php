<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlocklyEvent extends Model
{
    use HasFactory;
    protected $fillable=['event_id','type','is_ui_event','workspace_id','block_id', 'group'];
}
