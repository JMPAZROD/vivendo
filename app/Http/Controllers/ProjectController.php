<?php

namespace App\Http\Controllers;

use App\Models\ImageProject;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::all();

        return $project;
    }

    public function responseProject($project){
        if(!$project){
            return response()->json([
                'error'         => true,
                'message'       => 'Campo no puede ser vacio'
            ]);
        }

        $p = [];
        foreach ($project as $key => $value) {
            $p[$value->id]['id']        = $value->id;
            $p[$value->id]['name']      = $value->name;
            $p[$value->id]['images']    = ImageProject::where('project_id', $value->id)->get();
            $p[$value->id]['price']     = $value->price;
            $p[$value->id]['category']  = $value->category;
            $p[$value->id]['city']      = $value->city;
        }

        if($p){
            return response()->json($p);
        }

        return response()->json([
            'error'         => true,
            'message'       => 'No hay proyectos'
        ]);
    }

    public function projectList()
    {
        $project = Project::all();

        return $this->responseProject($project);
    }

    public function projectCity(Request $request)
    {
        $project = '';
        if($request->city_id){
            $project = Project::where('city_id', $request->city_id)->get();
        }

        return $this->responseProject($project);
    }

    public function projectCategory(Request $request)
    {
        $project = '';
        if($request->category_id){
            $project = Project::where('category_id', $request->category_id)->get();
        }

        return $this->responseProject($project);
    }

    public function projectDeparment(Request $request)
    {
        // $project = '';

        // if($request->deparment_id){
        //     $cities = City::where('deparment_id', $request->deparment_id)->get();

        //     foreach ($cities as $key => $value) {
        //         $p[] = Project::where('city_id', $value->id)->get();
        //         $project = json_encode($p);
        //     }

        //     $project = array_unique($project);


        //     echo $project;
        //     exit();
        //     foreach ($p as $key => $value) {
        //         foreach ($value as$v) {
        //         }
        //     }

        // }

        // return $this->responseProject($project);
    }
}
