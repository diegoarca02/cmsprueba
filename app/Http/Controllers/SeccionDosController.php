<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\SeccionDos;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class SeccionDosController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        $pagina = DB::table('users')
        ->where('current_page','=',auth()->user()->current_page)
        ->first();

        $current_page = $pagina->{'current_page'};
        

        $seccion_dos = DB::table('seccion_dos')
        ->where('idpagina','=',$current_page)
        ->first();

        return view('admin.seccion_dos.index',compact('seccion_dos'));
    }

    public function update(Request $request, $id){
        $validate = $this->validate($request,[
            'titulo'=>'required|max:250',
            'descripcion'=>'required',
            'imagen'=>'mimes:jpeg,bmp,jpg,png|max:5000',
        ]);

        $seccion = SeccionDos::findOrFail($id);
        $seccion->titulo = $request->get('titulo');
        $seccion->descripcion = $request->get('descripcion');
        if(Input::hasFile('imagen')){
            $file=Input::file('imagen');
            $file->move(public_path().'/secciones',time().".".$file->getClientOriginalExtension());
            $seccion->imagen=time().".".$file->getClientOriginalExtension();
        }
        $seccion->idpagina = auth()->user()->current_page;
        $seccion->update();

        Session::flash('succes', 'Se actualizó su registro con exito');
        return Redirect::to('admin/seccion_dos');
    }
}
