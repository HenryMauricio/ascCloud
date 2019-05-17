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
Route::bind('producto',function($id){
    return App\Models\Producto::where('id',$id)->first();
});

Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('empresas', 'EmpresaController');

Route::resource('sucursals', 'SucursalController');





Route::resource('personals', 'PersonalController');

Route::resource('categorias', 'CategoriaController');



Route::resource('ivas', 'IvaController');





Route::resource('productos', 'ProductoController');
Route::post('empresa/find/{id}', 'SucursalController@empresas');







Route::resource('plantas', 'PlantaController');

Route::resource('mesas', 'MesaController');

Route::get('reserva','ReservaController@index');
Route::post('planta/find/{id}', 'ReservaController@planta');
Route::get('/reservasm/{id}', 'ReservaController@reserva');

Route::get('/pedido', 'PedidoController@index');
Route::post('categorias/find/{id}', 'PedidoController@categorias');

Route::get('/pedido/detalle', 'PedidoController@show');
Route::get('/pedido/detalle/add/{producto}','PedidoController@add');
Route::get('/pedido/detalle/eliminar/{producto}/{dot}','PedidoController@delete');
Route::get('/pedido/detalle/update/{producto}/{dot}/{cantidad}/{observacion}','PedidoController@update');
Route::get('/pedido/detalle/update/{producto}/{dot}/{cantidad}','PedidoController@sinupdate');
Route::get('/pedido/create','PedidoController@create');
Route::get('/pedido/list','PedidoController@list');
Route::get('/pedido/edit/{id}','PedidoController@edit');
Route::get('/pedido/detalle/{id}','PedidoController@editar');
Route::get('/pedido/caja','PedidoController@showfechapedido');
Route::get('/pedido/meseros','PedidoController@showfechapedidomesero');
Route::post('/pedido/datos','PedidoController@fechapedido');
Route::post('/pedido/datosmesero','PedidoController@fechapedidomesero');

Route::get('/agregar/detalle', 'EditPedidoController@show');
Route::get('/agregar','EditPedidoController@agregar');
Route::get('/agregar/detalle','EditPedidoController@show');
Route::get('/agregar/detalle/add/{producto}','EditPedidoController@add');
Route::get('/agregar/detalle/eliminar/{producto}/{dot}','EditPedidoController@delete');
Route::get('/agregar/detalle/update/{producto}/{dot}/{cantidad}/{observacion}','EditPedidoController@update');
Route::get('/agregar/detalle/update/{producto}/{dot}/{cantidad}','EditPedidoController@sinupdate');
Route::get('/agregar/create','EditPedidoController@create');

Route::get('/precobro/{id}', 'PreCobroController@index');
Route::post('/precobro/cliente/{ruc}', 'PreCobroController@cliente');
Route::get('/precobro/pedido/{id}', 'PreCobroController@pedido');
Route::post('/precobro', 'PreCobroController@createone');



Route::get('/precobro/separado/{id}', 'PreCobroController@indexseparado');
Route::post('/precobro/separado/cliente/{ruc}', 'PreCobroController@cliente');
Route::get('/precobro/separado/pedido/{id}', 'PreCobroController@pedido_separado');
Route::get('/precobro/separado/pedido/total/{id}', 'PreCobroController@pedido_separado_total');
Route::post('/precobro/separado', 'PreCobroController@createmany');
Route::get('/list/precobro', 'PreCobroController@listpre');

Route::get('/cobro', 'CobroController@index');
Route::post('/cobro', 'CobroController@create');
Route::get('/cobro/{id}', 'CobroController@showmoney');
Route::get('/list', 'CobroController@list');
Route::get('/pdf/cobro/{id}', 'CobroController@showpdfpre');

Route::get('/reportes','ReporteController@ventas');
Route::get('/reporte/venta','ReporteController@showventas');
Route::post('/reporte/ventas','ReporteController@fechaventas');
Route::get('/cierres','ReporteController@cierre');
Route::get('/cierre/fecha','ReporteController@showciere');
Route::post('/cierre/caja','ReporteController@cierrefecha');


Route::resource('clientes', 'ClienteController');
Route::post('/newcliente', 'ClienteController@newcliente');
Route::post('/newcliente/separado', 'ClienteController@newclienteseparado');

Route::get('/comida','DespacharController@indexcomida');
Route::get('/bebida','DespacharController@indexbebida');
Route::get('/entregar/{id}','DespacharController@despacharcomida');

Route::get('/facturacion', function(){
    $url="https://celcer.sri.gob.ec/comprobantes-electronicos-ws/RecepcionComprobantesOffline?wsdl";
    // try{
    //     $client = new SoapClient($url);
    //     dd($client->__getTypes());
    //     //dd($client->validarComprobante());
    // }catch( SoapFault $fault){
    //     echo '<br>'.$fault;
    // }
    phpinfo();
});
Route::get('/xml','FacturacionController@crearXml');
Route::get('/verificador','FacturacionController@modulo11');
