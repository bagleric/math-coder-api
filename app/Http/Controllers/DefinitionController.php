<?php

namespace App\Http\Controllers;

use App\Models\Definition;
use Illuminate\Http\Request;

class DefinitionController extends Controller
{
    public function get(){
        $definitions = Definition::all();
        foreach ($definitions as $definition){
            $definition->name = json_decode($definition->name);
            $definition->definition_html = html_entity_decode($definition->definition_html);
        }
        return $definitions;
    }
}
