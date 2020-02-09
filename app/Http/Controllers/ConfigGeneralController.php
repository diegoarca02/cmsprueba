<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ConfigGeneral;
use Illuminate\Support\Facades\Input;
use Session;
use Illuminate\Support\Facades\Redirect;

class ConfigGeneralController extends Controller
{
    function index(){

        $pagina = DB::table('users')
        ->where('current_page','=',auth()->user()->current_page)
        ->first();

        $current_page = $pagina->{'current_page'};
        

        $general = DB::table('config_general')
        ->where('idpagina','=',$current_page)
        ->first();

        return view('admin.general.index',compact('general'));
    }

    function update_general(Request $request, $id){
        $validate = $this->validate($request,[   
            'titulo'=>'required|max:150',
            'fuente'=>'required|max:150',
            'size'=>'required|max:10',
            'logo'=>'mimes:jpeg,bmp,jpg,png|max:5000',
            'fondo_principal'=>'mimes:jpeg,bmp,jpg,png|max:5000',
            'favicon'=>'mimes:jpeg,bmp,jpg,png|max:5000',
            'mapa'=>'required|max:250',
        ]);

        $general = ConfigGeneral::findOrFail($id);
        $general->titulo = $request->get('titulo');
        $general->fuente = $request->get('fuente');
        $general->mapa = $request->get('mapa');
        $general->size = $request->get('size');
        if(Input::hasFile('logo')){
            $file=Input::file('logo');
            $file->move(public_path().'/general',time().".".$file->getClientOriginalExtension());
            $general->logo=time().".".$file->getClientOriginalExtension();
        }
        if(Input::hasFile('fondo_principal')){
            $file=Input::file('fondo_principal');
            $file->move(public_path().'/general',time().".".$file->getClientOriginalExtension());
            $general->fondo_principal=time().".".$file->getClientOriginalExtension();
        }
        if(Input::hasFile('favicon')){
            $file=Input::file('favicon');
            $file->move(public_path().'/general',time().".".$file->getClientOriginalExtension());
            $general->favicon=time().".".$file->getClientOriginalExtension();
        }
        $general->update();

        Session::flash('succes', 'Se actualizo su configuracion general con exito');
        return Redirect::to('admin/configuracion/general');
    }
}
