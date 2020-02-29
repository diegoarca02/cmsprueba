<?php

namespace App\Http\Controllers;
use App\Plantilla;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class PlantillaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    function index(){

        $data_plantillas = DB::table('plantilla')
        ->paginate('10');
        return view('panel.plantillas.index', compact('data_plantillas'));
    }

    function create(){
        return view('panel.plantillas.create');
    }

    function store(Request $request){
        $validate = $this->validate($request,[
            'titulo'=>'required|max:150',
            'descripcion' => 'required',
            'portada'=>'required|mimes:jpeg,bmp,jpg,png|max:5000',
        ]);

        $plantilla = new Plantilla;
        $plantilla->titulo = $request->get('titulo');
        $plantilla->descripcion = $request->get('descripcion');
        if(Input::hasFile('portada')){
            $file=Input::file('portada');
            $file->move(public_path().'/portadas',time().".".$file->getClientOriginalExtension());
            $plantilla->portada=time().".".$file->getClientOriginalExtension();
        }
        $plantilla->save();

        Session::flash('succes', 'Se registro su plantilla con exito');
        return Redirect::to('admin/plantillas');
    }

    function edit($id){

        $plantilla = DB::table('plantilla')
        ->where('id','=',$id)
        ->first();
        return view('panel.plantillas.edit',compact('plantilla'));
    }

    function update(Request $request,$id){
        $validate = $this->validate($request,[
            'titulo'=>'required|max:150',
            'descripcion' => 'required',
            'portada'=>'mimes:jpeg,bmp,jpg,png|max:5000',
        ]);

        $plantilla = Plantilla::findOrFail($id);
        $plantilla->titulo = $request->get('titulo');
        $plantilla->descripcion = $request->get('descripcion');
        if(Input::hasFile('portada')){
            $file=Input::file('portada');
            $file->move(public_path().'/portadas',time().".".$file->getClientOriginalExtension());
            $plantilla->portada=time().".".$file->getClientOriginalExtension();
        }
        $plantilla->update();

        Session::flash('succes', 'Se registro su plantilla con exito');
        return Redirect::to('admin/plantillas');
    }

    function destroy($id){
        $plantilla = Plantilla::findOrFail($id);
        $plantilla->delete();

        Session::flash('succes', 'Se elimino su plantilla con exito');
        return Redirect::to('admin/plantillas');
    }
}
