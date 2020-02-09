<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContactoController extends Controller
{
    public function index(){
        $mensaje = DB::table('contacto')
        ->where('idpagina','=',auth()->user()->current_page)
        ->get();

        return view('admin.contacto.index',compact('mensaje'));
    }
}
