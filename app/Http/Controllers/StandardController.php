<?php

namespace App\Http\Controllers;

use App\Models\Standard;
use Illuminate\Http\Request;

class StandardController extends Controller
{
    public function get(){
        $standards = Standard::all();
        return $standards;
    }
}
