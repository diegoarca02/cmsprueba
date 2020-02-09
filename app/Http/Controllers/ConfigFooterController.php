<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ConfigFooter;
use Session;
use Illuminate\Support\Facades\Redirect;

class ConfigFooterController extends Controller
{
    public function index()
    {
        $pagina = DB::table('users')
        ->where('current_page','=',auth()->user()->current_page)
        ->first();

        $current_page = $pagina->{'current_page'};
        

        $footer = DB::table('config_footer')
        ->where('idpagina','=',$current_page)
        ->first();


        return view('admin.footer.index',compact('footer'));
    }

    function update_footer(Request $request, $id){
        $validate = $this->validate($request,[   
            'color'=>'required|max:50',
            'background'=>'required|max:50',
            'cr'=>'required|max:150',
            'direccion'=>'required|max:250',
            'telefono'=>'required|max:10|min:8',
            'correo'=>'required|max:100|email',
            'horarios'=>'required|max:50',
        ]);

        $footer = ConfigFooter::findOrFail($id);
        $footer->color = '#'.$request->get('color');
        $footer->background = '#'.$request->get('background');
        $footer->cr = $request->get('cr');
        $footer->direccion = $request->get('direccion');
        $footer->telefono = $request->get('telefono');
        $footer->correo = $request->get('correo');
        $footer->horarios = $request->get('horarios');
        $footer->update();

        Session::flash('succes', 'Se actualizo su configuracion de footer con exito');
        return Redirect::to('admin/configuracion/footer');
    }
}
