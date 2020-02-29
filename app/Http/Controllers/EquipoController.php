<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Equipo;
use Illuminate\Support\Facades\Input;

class EquipoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){

        $equipo = DB::table('equipo')
        ->where('idpagina','=',auth()->user()->current_page)
        ->get();

        return view('admin.equipo.index', compact('equipo'));
    }

    function create(){
        return view('admin.equipo.create');
    }

    function store(Request $request){
        $validate = $this->validate($request,[
            'nombres'=>'required|max:150',
            'cargo'=>'required|max:50',
            'imagen'=>'mimes:jpeg,bmp,jpg,png|max:5000',
        ]);

        $equipo = new Equipo;
        $equipo->nombres = $request->get('nombres');
        $equipo->cargo = $request->get('cargo');
        if(Input::hasFile('imagen')){
            $file=Input::file('imagen');
            $file->move(public_path().'/equipo',time().".".$file->getClientOriginalExtension());
            $equipo->imagen=time().".".$file->getClientOriginalExtension();
        }
        $equipo->idpagina = auth()->user()->current_page;
        $equipo->save();

        Session::flash('succes', 'Se registro su persona con exito');
        return Redirect::to('admin/equipos');
    }

    public function edit($id){

        $equipo = Equipo::findOrFail($id);

        return view('admin.equipo.edit',compact('equipo'));
    }

    public function update(Request $request, $id){
        $validate = $this->validate($request,[
            'nombres'=>'required|max:150',
            'cargo'=>'required|max:50',
            'imagen'=>'mimes:jpeg,bmp,jpg,png|max:5000',
        ]);

        $equipo = Equipo::findOrFail($id);
        $equipo->nombres = $request->get('nombres');
        $equipo->cargo = $request->get('cargo');
        if(Input::hasFile('imagen')){
            $file=Input::file('imagen');
            $file->move(public_path().'/equipo',time().".".$file->getClientOriginalExtension());
            $equipo->imagen=time().".".$file->getClientOriginalExtension();
        }
        $equipo->idpagina = auth()->user()->current_page;
        $equipo->update();

        Session::flash('succes', 'Se actualizó su persona con exito');
        return Redirect::to('admin/equipos');
    }

    public function destroy($id){
        $equipo = Equipo::findOrFail($id);
        $equipo->delete();

        Session::flash('succes', 'Se elimino su persona con exito');
        return Redirect::to('admin/equipos');
    }
}
