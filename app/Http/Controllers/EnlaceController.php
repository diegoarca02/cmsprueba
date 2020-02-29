<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enlace;
use Session;
use Illuminate\Support\Facades\Redirect;
use DB;
use Illuminate\Support\Facades\Input;

class EnlaceController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){

        $enlace = DB::table('enlace')
        ->where('idpagina','=',auth()->user()->current_page)
        ->get();

        return view('admin.enlace.index', compact('enlace'));
    }

    function create(){
        return view('admin.enlace.create');
    }

    function store(Request $request){
        $validate = $this->validate($request,[
            'enlace'=>'required|max:250',
            'imagen'=>'mimes:jpeg,bmp,jpg,png|max:5000',
        ]);

        $enlace = new Enlace;
        $enlace->enlace = $request->get('enlace');
        if(Input::hasFile('imagen')){
            $file=Input::file('imagen');
            $file->move(public_path().'/enlace',time().".".$file->getClientOriginalExtension());
            $enlace->imagen=time().".".$file->getClientOriginalExtension();
        }
        $enlace->idpagina = auth()->user()->current_page;
        $enlace->save();

        Session::flash('succes', 'Se guardo su registro con exito');
        return Redirect::to('admin/enlaces');
    }

    public function edit($id){

        $enlace = Enlace::findOrFail($id);

        return view('admin.enlace.edit',compact('enlace'));
    }

    public function update(Request $request, $id){
        $validate = $this->validate($request,[
            'enlace'=>'required|max:250',
            'imagen'=>'mimes:jpeg,bmp,jpg,png|max:5000',
        ]);

        $enlace = Enlace::findOrFail($id);
        $enlace->enlace = $request->get('enlace');
        if(Input::hasFile('imagen')){
            $file=Input::file('imagen');
            $file->move(public_path().'/enlace',time().".".$file->getClientOriginalExtension());
            $enlace->imagen=time().".".$file->getClientOriginalExtension();
        }
        $enlace->idpagina = auth()->user()->current_page;
        $enlace->update();

        Session::flash('succes', 'Se guardo su registro con exito');
        return Redirect::to('admin/enlaces');
    }

    public function destroy($id){
        $enlace = Enlace::findOrFail($id);
        $enlace->delete();

        Session::flash('succes', 'Se elimino su registro con exito');
        return Redirect::to('admin/enlaces');
    }
}
