<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pagina;
use App\SeccionUno;
use App\SeccionDos;
use App\ConfigMenu;
use App\ConfigItem;
use App\ConfigGeneral;
use App\ConfigFooter;
use App\Slider;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\User;


class PaginaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    function index(){
        $data_paginas = DB::table('pagina')
        ->where('iduser','=',auth()->user()->id)
        ->orderby('id','desc')
        ->get();
        return view('admin.pagina.index',compact('data_paginas'));
    }

    function create(){

        $plantillas = DB::table('plantilla')
        ->orderby('id','asc')
        ->take(3)->get();
        return view('admin.pagina.create', compact('plantillas'));
    }

    function store(Request $request){
        $validate = $this->validate($request,[
            'dominio'=>'required|unique:pagina|regex:/^[0-9a-zA-Z\s]+$/u',
            'idplantilla'=>'required',
        ]);

        $pagina = new Pagina;
        $pagina->dominio=$request->get('dominio');
        $pagina->idplantilla=$request->get('idplantilla');
        $pagina->iduser=auth()->user()->id;
        $pagina->estado = 'activo';
        $pagina->save();

        $seccion_uno = new  SeccionUno;
        $seccion_uno->titulo = 'Titulo de mi sección';
        $seccion_uno->descripcion = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates a cupiditate, odio sint laboriosam laudantium id ea earum nemo dolores? Dicta mollitia necessitatibus optio eaque ipsum porro enim officia vitae ut numquam sit temporibus quis consectetur, libero nemo sequi fuga.';
        $seccion_uno->imagen = 'default_seccion_uno.jpg';
        $seccion_uno->idpagina = $pagina->id;
        $seccion_uno->save();

        $seccion_dos = new  SeccionDos;
        $seccion_dos->titulo = 'Titulo de mi sección';
        $seccion_dos->descripcion = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates a cupiditate, odio sint laboriosam laudantium id ea earum nemo dolores? Dicta mollitia necessitatibus optio eaque ipsum porro enim officia vitae ut numquam sit temporibus quis consectetur, libero nemo sequi fuga.';
        $seccion_dos->imagen = 'default_seccion_dos.jpg';
        $seccion_dos->idpagina = $pagina->id;
        $seccion_dos->save();

        $menu = new ConfigMenu;
        $menu->color = '#fff';
        $menu->background = '#2471A3';
        $menu->titulo = 'Titulo de página';
        $menu->idpagina = $pagina->id;
        $menu->save();

        $item = new ConfigItem;
        $item->titulo = 'Inicio';
        $item->enlace = 'http://127.0.0.1:8000/'.$request->get('dominio');
        $item->icono = '<i class="fas fa-home"></i>';
        $item->idmenu = $menu->id;
        $item->save();

        $general = new ConfigGeneral;
        $general->fuente = '';
        $general->size = '10px';
        $general->logo = 'logo_default.png';
        $general->fondo_principal = 'principal_default.png';
        $general->titulo = 'Titulo de pestaña';
        $general->favicon = 'logo_default.png';
        $general->idpagina = $pagina->id;
        $general->mapa = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3656.1122124082067!2d-77.03452449497695!3d-12.072117744470335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2spe!4v1581270166517!5m2!1ses!2spe" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>';
        $general->save();

        $footer = new ConfigFooter;
        $footer->color = '#fff';
        $footer->background = '#2471A3';
        $footer->cr = 'Derechos reservados a Titulode pagina';
        $footer->direccion = 'Mi direccion';
        $footer->telefono = '123456789';
        $footer->correo = 'micorreo@cmsexample.com';
        $footer->horarios = 'Mis horarios de atencion';
        $footer->idpagina = $pagina->id;
        $footer->save();

        $slider1 = new Slider;
        $slider1->titulo = 'Mi primer slider1';
        $slider1->imagen = 'slider_1.jpg';
        $slider1->idpagina = $pagina->id;
        $slider1->save();

        $slider2 = new Slider;
        $slider2->titulo = 'Mi primer slider2';
        $slider2->imagen = 'slider_2.jpg';
        $slider2->idpagina = $pagina->id;
        $slider2->save();

        $slider3 = new Slider;
        $slider3->titulo = 'Mi primer slider3';
        $slider3->imagen = 'slider_3.jpg';
        $slider3->idpagina = $pagina->id;
        $slider3->save();

   
        Session::flash('succes', 'Se registro su pagina con exito');
        return Redirect::to('admin/paginas');
    }

    function update(Request $request,$id){
        $validate = $this->validate($request,[
            'dominio'=>'required|unique:pagina|regex:/^[0-9a-zA-Z\s]+$/u',
        ]);

        $pagina = Pagina::findOrFail($id);
        $pagina->dominio=$request->get('dominio');
        $pagina->update();

        Session::flash('succes', 'Se cambio el dominio con exito');
        return Redirect::to('admin/paginas');
    }

    function destroy($id){
        $pagina = Pagina::findOrFail($id);
        $pagina->delete();

        Session::flash('succes', 'Se elimino su pagina con exito');
        return Redirect::to('admin/paginas');
    }

    function change_theme(){

        $pagina = DB::table('pagina')
        ->where('id','=',auth()->user()->current_page)
        ->first();

        $plantillas = DB::table('plantilla')
        ->get();

        return view('admin.pagina.change_theme',compact('plantillas','pagina'));
    }

    function update_theme(Request $request){

        $pagina = Pagina::findOrFail(auth()->user()->current_page);
        $pagina->idplantilla = $request->get('idplantilla');
        $pagina->update();

        Session::flash('succes', 'Se elimino su registro con exito');
        return Redirect::to('admin/change/plantillas');
    }

  
    public function current_page(Request $request, $id){
        $user = User::findOrFail($id);
        $user->current_page = $request->get('current_page');
        $user->update();
        Session::flash('succes', 'Se selecciono su pagina de edicion');
        return Redirect::to('admin/paginas');
    }
}
