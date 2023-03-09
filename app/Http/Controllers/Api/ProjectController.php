<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();
        return response()->json([
            'success'       => true,
            'projects'      => $projects
        ]);
    }
    
}
