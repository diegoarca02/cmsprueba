<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Contacto;
use Illuminate\Support\Facades\Redirect;
use Session;

class DominioController extends Controller
{
    public function open_page($dominio){
        $pagina = DB::table('pagina')
        ->where('dominio','=',$dominio)
        ->first();
        
        if(!$pagina){
            abort('404');
        }else{
            $idpagina = $pagina->{'id'};
            $idplantilla = $pagina->{'idplantilla'};
            
            $menu = DB::table('config_menu')
            ->where('idpagina','=',$idpagina)
            ->first();

            $idmenu = $menu->{'id'};

            $items_menu = DB::table('config_item')
            ->where('idmenu','=',$idmenu)
            ->get();

            $general = DB::table('config_general')
            ->where('idpagina','=',$idpagina)
            ->first();


            $footer = DB::table('config_footer')
            ->where('idpagina','=',$idpagina)
            ->first();


            $entrada = DB::table('entrada')
            ->where('idpagina','=',$idpagina)
            ->get();

            $equipo = DB::table('equipo')
            ->where('idpagina','=',$idpagina)
            ->get();

            $enlace = DB::table('enlace')
            ->where('idpagina','=',$idpagina)
            ->get();

            $galeria_index = DB::table('galeria')
            ->where('idpagina','=',$idpagina)
            ->take(4)
            ->get();

            $galeria_footer = DB::table('galeria')
            ->where('idpagina','=',$idpagina)
            ->take(6)
            ->get();

            $galeria = DB::table('galeria')
            ->where('idpagina','=',$idpagina)
            ->get();


            $seccion_uno = DB::table('seccion_uno')
            ->where('idpagina','=',$idpagina)
            ->first();

            $seccion_dos = DB::table('seccion_dos')
            ->where('idpagina','=',$idpagina)
            ->first();

            $slider = DB::table('slider')
            ->where('idpagina','=',$idpagina)
            ->get();

            $blog = DB::table('blog')
            ->where('idpagina','=',$idpagina)
            ->get();

            $blog_index = DB::table('blog')
            ->where('idpagina','=',$idpagina)
            ->take(3)
            ->get();


            return view('plantillas.'.$idplantilla.'.index',compact('menu','items_menu','general','footer','entrada','equipo','enlace','galeria','seccion_uno','seccion_dos','slider','blog','galeria_index','galeria_footer','blog_index',));

        }
    }

    public function open_galeria($dominio){
        $pagina = DB::table('pagina')
        ->where('dominio','=',$dominio)
        ->first();
        
        if(!$pagina){
            abort('404');
        }else{
            $idpagina = $pagina->{'id'};
            $idplantilla = $pagina->{'idplantilla'};
            
            $menu = DB::table('config_menu')
            ->where('idpagina','=',$idpagina)
            ->first();

            $idmenu = $menu->{'id'};

            $items_menu = DB::table('config_item')
            ->where('idmenu','=',$idmenu)
            ->get();

            $general = DB::table('config_general')
            ->where('idpagina','=',$idpagina)
            ->first();

            $footer = DB::table('config_footer')
            ->where('idpagina','=',$idpagina)
            ->first();


            $entrada = DB::table('entrada')
            ->where('idpagina','=',$idpagina)
            ->get();

            $equipo = DB::table('equipo')
            ->where('idpagina','=',$idpagina)
            ->get();

            $enlace = DB::table('enlace')
            ->where('idpagina','=',$idpagina)
            ->get();

            $galeria_index = DB::table('galeria')
            ->where('idpagina','=',$idpagina)
            ->take(4)
            ->get();

            $galeria_footer = DB::table('galeria')
            ->where('idpagina','=',$idpagina)
            ->take(6)
            ->get();

            $galeria = DB::table('galeria')
            ->where('idpagina','=',$idpagina)
            ->paginate(6);

            $seccion_uno = DB::table('seccion_uno')
            ->where('idpagina','=',$idpagina)
            ->first();

            $seccion_dos = DB::table('seccion_dos')
            ->where('idpagina','=',$idpagina)
            ->first();

            $slider = DB::table('slider')
            ->where('idpagina','=',$idpagina)
            ->get();

            $blog = DB::table('blog')
            ->where('idpagina','=',$idpagina)
            ->get();
           
            return view('plantillas.'.$idplantilla.'.galeria',compact('menu','items_menu','general','footer','entrada','equipo','enlace','galeria','seccion_uno','seccion_dos','slider','blog','galeria_index','galeria_footer'));

        }
    }

    public function open_blog($dominio){
        $pagina = DB::table('pagina')
        ->where('dominio','=',$dominio)
        ->first();
        
        if(!$pagina){
            abort('404');
        }else{
            $idpagina = $pagina->{'id'};
            $idplantilla = $pagina->{'idplantilla'};
            
            $menu = DB::table('config_menu')
            ->where('idpagina','=',$idpagina)
            ->first();

            $idmenu = $menu->{'id'};

            $items_menu = DB::table('config_item')
            ->where('idmenu','=',$idmenu)
            ->get();

            $general = DB::table('config_general')
            ->where('idpagina','=',$idpagina)
            ->first();

            $footer = DB::table('config_footer')
            ->where('idpagina','=',$idpagina)
            ->first();


            $entrada = DB::table('entrada')
            ->where('idpagina','=',$idpagina)
            ->get();

            $equipo = DB::table('equipo')
            ->where('idpagina','=',$idpagina)
            ->get();

            $enlace = DB::table('enlace')
            ->where('idpagina','=',$idpagina)
            ->get();

            $galeria_index = DB::table('galeria')
            ->where('idpagina','=',$idpagina)
            ->take(4)
            ->get();

            $galeria_footer = DB::table('galeria')
            ->where('idpagina','=',$idpagina)
            ->take(6)
            ->get();

            $galeria = DB::table('galeria')
            ->where('idpagina','=',$idpagina)
            ->paginate(6);

            $seccion_uno = DB::table('seccion_uno')
            ->where('idpagina','=',$idpagina)
            ->first();

            $seccion_dos = DB::table('seccion_dos')
            ->where('idpagina','=',$idpagina)
            ->first();

            $slider = DB::table('slider')
            ->where('idpagina','=',$idpagina)
            ->get();

            $blog = DB::table('blog')
            ->where('idpagina','=',$idpagina)
            ->paginate(9);
           
            return view('plantillas.'.$idplantilla.'.blog',compact('menu','items_menu','general','footer','entrada','equipo','enlace','galeria','seccion_uno','seccion_dos','slider','blog','galeria_index','galeria_footer'));

        }
    }

    public function open_blog_single($dominio,$slug){
        $pagina = DB::table('pagina')
        ->where('dominio','=',$dominio)
        ->first();
        
        if(!$pagina){
            abort('404');
        }else{
            $idpagina = $pagina->{'id'};
            $idplantilla = $pagina->{'idplantilla'};
            
            $menu = DB::table('config_menu')
            ->where('idpagina','=',$idpagina)
            ->first();

            $idmenu = $menu->{'id'};

            $items_menu = DB::table('config_item')
            ->where('idmenu','=',$idmenu)
            ->get();

            $general = DB::table('config_general')
            ->where('idpagina','=',$idpagina)
            ->first();

            $footer = DB::table('config_footer')
            ->where('idpagina','=',$idpagina)
            ->first();


            $entrada = DB::table('entrada')
            ->where('idpagina','=',$idpagina)
            ->get();

            $equipo = DB::table('equipo')
            ->where('idpagina','=',$idpagina)
            ->get();

            $enlace = DB::table('enlace')
            ->where('idpagina','=',$idpagina)
            ->get();

            $galeria_index = DB::table('galeria')
            ->where('idpagina','=',$idpagina)
            ->take(4)
            ->get();

            $galeria_footer = DB::table('galeria')
            ->where('idpagina','=',$idpagina)
            ->take(6)
            ->get();

            $galeria = DB::table('galeria')
            ->where('idpagina','=',$idpagina)
            ->paginate(6);

            $seccion_uno = DB::table('seccion_uno')
            ->where('idpagina','=',$idpagina)
            ->first();

            $seccion_dos = DB::table('seccion_dos')
            ->where('idpagina','=',$idpagina)
            ->first();

            $slider = DB::table('slider')
            ->where('idpagina','=',$idpagina)
            ->get();

            $blog = DB::table('blog')
            ->where('slug','=',$slug)
            ->first();

           
            return view('plantillas.'.$idplantilla.'.blog_single',compact('menu','items_menu','general','footer','entrada','equipo','enlace','galeria','seccion_uno','seccion_dos','slider','blog','galeria_index','galeria_footer'));

        }
    }

    public function open_contacto($dominio){
        $pagina = DB::table('pagina')
        ->where('dominio','=',$dominio)
        ->first();
        
        if(!$pagina){
            abort('404');
        }else{
            $idpagina = $pagina->{'id'};
            $idplantilla = $pagina->{'idplantilla'};
            
            $menu = DB::table('config_menu')
            ->where('idpagina','=',$idpagina)
            ->first();

            $idmenu = $menu->{'id'};

            $items_menu = DB::table('config_item')
            ->where('idmenu','=',$idmenu)
            ->get();

            $general = DB::table('config_general')
            ->where('idpagina','=',$idpagina)
            ->first();

            $footer = DB::table('config_footer')
            ->where('idpagina','=',$idpagina)
            ->first();


            $entrada = DB::table('entrada')
            ->where('idpagina','=',$idpagina)
            ->get();

            $equipo = DB::table('equipo')
            ->where('idpagina','=',$idpagina)
            ->get();

            $enlace = DB::table('enlace')
            ->where('idpagina','=',$idpagina)
            ->get();

            $galeria_index = DB::table('galeria')
            ->where('idpagina','=',$idpagina)
            ->take(4)
            ->get();

            $galeria_footer = DB::table('galeria')
            ->where('idpagina','=',$idpagina)
            ->take(6)
            ->get();

            $galeria = DB::table('galeria')
            ->where('idpagina','=',$idpagina)
            ->paginate(6);

            $seccion_uno = DB::table('seccion_uno')
            ->where('idpagina','=',$idpagina)
            ->first();

            $seccion_dos = DB::table('seccion_dos')
            ->where('idpagina','=',$idpagina)
            ->first();

            $slider = DB::table('slider')
            ->where('idpagina','=',$idpagina)
            ->get();

            $blog = DB::table('blog')
            ->where('idpagina','=',$idpagina)
            ->paginate(9);
           
            return view('plantillas.'.$idplantilla.'.contacto',compact('menu','items_menu','general','footer','entrada','equipo','enlace','galeria','seccion_uno','seccion_dos','slider','blog','galeria_index','galeria_footer','idpagina','dominio'));

        }

    }

    public function store_contacto($domonio, Request $request){

        $validate = $this->validate($request,[
            'nombres'=>'required|max:250',
            'correo'=>'required|max:100|email',
            'telefono'=>'required|max:10|min:8',
            'mensaje'=>'required|max:800',
        ]);

        $contacto = new Contacto;
        $contacto->nombres = $request->get('nombres');
        $contacto->correo = $request->get('correo');
        $contacto->telefono = $request->get('telefono');
        $contacto->mensaje = $request->get('mensaje');
        $contacto->idpagina = $request->get('idpagina');
        $contacto->save();

        Session::flash('succes', 'Se mando su mensaje exitosamente');
        return Redirect::to('http://127.0.0.1:8000/'.$domonio.'/contenido/pagina/contacto');
    }

    public function open_entrada($dominio,$slug){
        $pagina = DB::table('pagina')
        ->where('dominio','=',$dominio)
        ->first();
        
        if(!$pagina){
            abort('404');
        }else{
            $idpagina = $pagina->{'id'};
            $idplantilla = $pagina->{'idplantilla'};
            
            $menu = DB::table('config_menu')
            ->where('idpagina','=',$idpagina)
            ->first();

            $idmenu = $menu->{'id'};

            $items_menu = DB::table('config_item')
            ->where('idmenu','=',$idmenu)
            ->get();

            $general = DB::table('config_general')
            ->where('idpagina','=',$idpagina)
            ->first();

            $footer = DB::table('config_footer')
            ->where('idpagina','=',$idpagina)
            ->first();


            $entrada = DB::table('entrada')
            ->where('idpagina','=',$idpagina)
            ->get();

            $equipo = DB::table('equipo')
            ->where('idpagina','=',$idpagina)
            ->get();

            $enlace = DB::table('enlace')
            ->where('idpagina','=',$idpagina)
            ->get();

            $galeria_index = DB::table('galeria')
            ->where('idpagina','=',$idpagina)
            ->take(4)
            ->get();

            $galeria_footer = DB::table('galeria')
            ->where('idpagina','=',$idpagina)
            ->take(6)
            ->get();

            $galeria = DB::table('galeria')
            ->where('idpagina','=',$idpagina)
            ->paginate(6);

            $seccion_uno = DB::table('seccion_uno')
            ->where('idpagina','=',$idpagina)
            ->first();

            $seccion_dos = DB::table('seccion_dos')
            ->where('idpagina','=',$idpagina)
            ->first();

            $slider = DB::table('slider')
            ->where('idpagina','=',$idpagina)
            ->get();

            $entrada = DB::table('entrada')
            ->where('slug','=',$slug)
            ->first();

           
            return view('plantillas.'.$idplantilla.'.entrada',compact('menu','items_menu','general','footer','entrada','equipo','enlace','galeria','seccion_uno','seccion_dos','slider','entrada','galeria_index','galeria_footer'));

        }
    }
    
}
