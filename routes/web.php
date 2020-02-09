<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('{dominio}','DominioController@open_page')->name('open_page');
Route::get('{dominio}/contenido/pagina/galeria','DominioController@open_galeria')->name('open_galeria');
Route::get('{dominio}/contenido/pagina/blog','DominioController@open_blog')->name('open_blog');
Route::get('{dominio}/contenido/pagina/blog/{slug}','DominioController@open_blog_single')->name('open_blog_single');
Route::get('{dominio}/contenido/pagina/contacto','DominioController@open_contacto')->name('open_contacto');
Route::post('{dominio}/contenido/pagina/contacto','DominioController@store_contacto')->name('store_contacto');
Route::get('{dominio}/contenido/{slug}','DominioController@open_entrada')->name('open_entrada');

Route::get('home/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/', 'Auth\LoginController@showLogin')->middleware('guest')->name('loginform');
Route::post('login','Auth/LoginController@login')->name('login');

Route::get('op/registrar', 'RegistroController@index')->name('registro');
Route::post('op/registrar', 'RegistroController@store')->name('store.registro');

/*PLANTILLAS*/
Route::get('admin/plantillas','PlantillaController@index')->name('index.plantilla');
Route::get('admin/plantilla/crear','PlantillaController@create')->name('create.plantilla');
Route::post('admin/plantilla/crear','PlantillaController@store')->name('store.plantilla');
Route::get('admin/plantilla/actualizar/{id}','PlantillaController@edit')->name('edit.plantilla');
Route::patch('admin/plantilla/actualizar/{id}','PlantillaController@update')->name('update.plantilla');
Route::delete('admin/plantilla/{id}','PlantillaController@destroy')->name('destroy.plantilla');

/*PAGINA*/
Route::get('admin/paginas','PaginaController@index')->name('index.pagina');
Route::get('admin/pagina/crear','PaginaController@create')->name('create.pagina');
Route::post('admin/pagina/crear','PaginaController@store')->name('store.pagina');
Route::patch('admin/pagina/{id}','PaginaController@update')->name('update.pagina');
Route::delete('admin/pagina/{id}','PaginaController@destroy')->name('destroy.pagina');

/*MENU*/
Route::get('admin/configuracion/menu','ConfigMenuController@index')->name('index.menu');
Route::patch('admin/configuracion/menu/{id}','ConfigMenuController@update')->name('update.menu');
Route::post('admin/configuracion/menu','ConfigMenuController@store')->name('store.menu');
Route::get('admin/configuracion/menu/{id}','ConfigMenuController@edit_item')->name('edit_item');
Route::patch('admin/configuracion/menu/item/{id}','ConfigMenuController@update_item')->name('update_item');
Route::delete('admin/configuracion/menu/{id}','ConfigMenuController@destroy')->name('destroy.menu');

/*GENERAL */
Route::get('admin/configuracion/general','ConfigGeneralController@index')->name('index.general');
Route::patch('admin/configuracion/general/{id}','ConfigGeneralController@update_general')->name('update.general');

/*FOOTER */
Route::get('admin/configuracion/footer','ConfigFooterController@index')->name('index.footer');
Route::patch('admin/configuracion/footer/{id}','ConfigFooterController@update_footer')->name('update.footer');


/*ENTRADA */
Route::get('admin/entradas','EntradaController@index')->name('index.entrada');
Route::get('admin/entrada/crear','EntradaController@create')->name('create.entrada');
Route::post('admin/entrada/crear','EntradaController@store')->name('store.entrada');
Route::get('admin/entrada/{id}','EntradaController@edit')->name('edit.entrada');
Route::patch('admin/entrada/{id}','EntradaController@update')->name('update.entrada');
Route::delete('admin/entradas/{id}','EntradaController@destroy')->name('destroy.entrada');

/*EQUIPO */
Route::get('admin/equipos','EquipoController@index')->name('index.equipo');
Route::get('admin/equipo/crear','EquipoController@create')->name('create.equipo');
Route::post('admin/equipo/crear','EquipoController@store')->name('store.equipo');
Route::get('admin/equipo/{id}','EquipoController@edit')->name('edit.equipo');
Route::patch('admin/equipo/{id}','EquipoController@update')->name('update.equipo');
Route::delete('admin/equipo/{id}','EquipoController@destroy')->name('destroy.equipo');


/*ENLACE */
Route::get('admin/enlaces','EnlaceController@index')->name('index.enlace');
Route::get('admin/enlace/crear','EnlaceController@create')->name('create.enlace');
Route::post('admin/enlace/crear','EnlaceController@store')->name('store.enlace');
Route::get('admin/enlace/{id}','EnlaceController@edit')->name('edit.enlace');
Route::patch('admin/enlace/{id}','EnlaceController@update')->name('update.enlace');
Route::delete('admin/enlace/{id}','EnlaceController@destroy')->name('destroy.enlace');

/*GALERIA */
Route::get('admin/galeria','GaleriasController@index')->name('index.galeria');
Route::post('admin/galeria/crear','GaleriasController@store')->name('store.galeria');
Route::delete('admin/galeria/{id}','GaleriasController@destroy')->name('destroy.galeria');

/*SECCION UNO */
Route::get('admin/seccion_uno','SeccionUnoController@index')->name('index.seccion_uno');
Route::patch('admin/seccion_uno/{id}','SeccionUnoController@update')->name('update.seccion_uno');

/*SECCION DOS */
Route::get('admin/seccion_dos','SeccionDosController@index')->name('index.seccion_dos');
Route::patch('admin/seccion_dos/{id}','SeccionDosController@update')->name('update.seccion_dos');

/*SLIDER */
Route::get('admin/slider','SliderController@index')->name('index.slider');
Route::get('admin/slider/crear','SliderController@create')->name('create.slider');
Route::post('admin/slider/crear','SliderController@store')->name('store.slider');
Route::get('admin/slider/{id}','SliderController@edit')->name('edit.slider');
Route::patch('admin/slider/{id}','SliderController@update')->name('update.slider');
Route::delete('admin/slider/{id}','SliderController@destroy')->name('destroy.slider');

/*BLOG */
Route::get('admin/blog','BlogController@index')->name('index.blog');
Route::get('admin/blog/crear','BlogController@create')->name('create.blog');
Route::post('admin/blog/crear','BlogController@store')->name('store.blog');
Route::get('admin/blog/{id}','BlogController@edit')->name('edit.blog');
Route::patch('admin/blog/{id}','BlogController@update')->name('update.blog');
Route::delete('admin/blog/{id}','BlogController@destroy')->name('destroy.blog');

Route::get('admin/mensajes','ContactoController@index')->name('index.contacto');
Route::get('admin/change/plantillas','PaginaController@change_theme')->name('change_theme');
Route::patch('admin/change/plantillas','PaginaController@update_theme')->name('update_theme');

Route::get('administrador/usuarios','AdminController@index')->name('index.usuarios');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
