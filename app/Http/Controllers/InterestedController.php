<?php

namespace App\Http\Controllers;

use App\Models\Interested;
use App\Models\Project;
use App\Rules\Name;
use App\Rules\PhoneNumber;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InterestedController extends Controller
{
    public function index()
    {
        $projects = Interested::all();
        return view('interested.index', [
            'projects'  => $projects
        ]);
    }


    public function interestedList()
    {
        $interested = Interested::all();

        if($interested){
            return $interested;
        }

        return response()->json([
            'error'         => true,
            'message'       => 'No hay proyectos'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => ['required', new Name],
            'email'         => 'required|email',
            'phone'         => ['required', new PhoneNumber],
            'city'          => "required|regex:/^[a-zA-Z\s]+$/u",
            'country'       => "required|regex:/^[a-zA-Z\s]+$/u",
            'project_id'    => 'required'
        ],[
            'required'      => 'Campo requerido',
            'email'         => 'Correo invalido',
            'regex'         => 'Campo no permite caracteres especiales'
        ]);

        $project        = Project::where('id', $request->project_id)->first();

        if(!$project){
            return response()->json([
                'error'     => true,
                'message'   => 'No existe el proyecto'
            ]);
        }

        $interested     = Interested::where('email', $request->email)->get();
        $today          = Carbon::now()->format('d-m-Y');

        foreach ($interested as $key => $i) {
            $dateInterested = $i->created_at->format('d-m-Y');
            if($dateInterested==$today){
                return response()->json([
                    'error'     => true,
                    'message'   => 'No puede registrarse en el mismo proyecto durante 24 horas'
                ]);
            }
        }

        $newInterested  = new Interested();
        $newInterested->name          = $request->name;
        $newInterested->email         = $request->email;
        $newInterested->phone         = $request->phone;
        $newInterested->city          = $request->city;
        $newInterested->country       = $request->country;
        $newInterested->project_id    = $request->project_id;
        $newInterested->save();

        return response()->json([
            'state'     => true,
            'message'   => 'Registro guardado correctamente'
        ]);
    }
}
