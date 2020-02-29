<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeria;
use Session;
use Illuminate\Support\Facades\Redirect;
use DB;
use Illuminate\Support\Facades\Input;

class GaleriasController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){

        $galeria = DB::table('galeria')
        ->where('idpagina','=',auth()->user()->current_page)
        ->get();

        return view('admin.galeria.index', compact('galeria'));
    }

    function store(Request $request){
        $validate = $this->validate($request,[
            'imagen'=>'mimes:jpeg,bmp,jpg,png|max:5000',
        ]);

        $galeria = new Galeria;
        if(Input::hasFile('imagen')){
            $file=Input::file('imagen');
            $file->move(public_path().'/galeria',time().".".$file->getClientOriginalExtension());
            $galeria->imagen=time().".".$file->getClientOriginalExtension();
        }
        $galeria->idpagina = auth()->user()->current_page;
        $galeria->save();

        Session::flash('succes', 'Se guardo su registro con exito');
        return Redirect::to('admin/galeria');
    }


    public function destroy($id){
        $galeria = Galeria::findOrFail($id);
        $galeria->delete();

        Session::flash('succes', 'Se elimino su registro con exito');
        return Redirect::to('admin/galeria');
    }
}
