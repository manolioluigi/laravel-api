<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::with('type', 'technologies')->paginate(9);
        return response()->json([
            'success'       => true,
            'results'      => $projects
        ]);
    }
    
    public function show($slug){
        $project = Project::with('type', 'technologies')->where('slug', $slug)->first();    
        if($project){
            return response()->json([
                'success'   => true,
                'project'   => $project
            ]);
        }else{
            return response()->json([
                'success'   => false,
                'error'     => 'Nessun progetto trovato'
            ]);
        }
    }

}
