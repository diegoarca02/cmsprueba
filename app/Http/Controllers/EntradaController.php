<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entrada;
use Session;
use Illuminate\Support\Facades\Redirect;
use DB;
use Illuminate\Support\Str;

class EntradaController extends Controller
{
    public function index(){

        $entradas = DB::table('entrada')
        ->where('idpagina','=',auth()->user()->current_page)
        ->get();

        return view('admin.entrada.index', compact('entradas'));
    }

    function create(){
        return view('admin.entrada.create');
    }

    function store(Request $request){
        $validate = $this->validate($request,[
            'titulo'=>'required|max:150|unique:entrada',
            'contenido'=>'required',
        ]);

        $entrada = new Entrada;
        $entrada->slug = Str::slug($request->get('titulo'),'_');
        $entrada->titulo = $request->get('titulo');
        $entrada->contenido = $request->get('contenido');
        $entrada->idpagina = auth()->user()->current_page;
        
        $entrada->save();

        Session::flash('succes', 'Se registro su entrada con exito');
        return Redirect::to('admin/entradas');
    }

    public function edit($id){

        $entrada = Entrada::findOrFail($id);

        return view('admin.entrada.edit',compact('entrada'));
    }

    public function update(Request $request, $id){
        $validate = $this->validate($request,[
            'titulo'=>'required|max:150',
            'contenido'=>'required',
        ]);

        $entrada = Entrada::findOrFail($id);
        $entrada->slug = Str::slug($request->get('titulo'),'_');
        $entrada->titulo = $request->get('titulo');
        $entrada->contenido = $request->get('contenido');
        $entrada->idpagina = auth()->user()->current_page;
        $entrada->update();

        Session::flash('succes', 'Se actulizó su entrada con exito');
        return Redirect::to('admin/entradas');
    }

    public function destroy($id){
        $entrada = Entrada::findOrFail($id);
        $entrada->delete();

        Session::flash('succes', 'Se elimino su entrada con exito');
        return Redirect::to('admin/entradas');
    }
}
