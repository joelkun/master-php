<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\FrutaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    echo "<h1>Hola Mundo!!</h1>";
});

Route::get('/peliculas/{pagina?}', [PeliculaController::class,'index']);
Route::get('/detalle/{year?}', [PeliculaController::class,'detalle'])
->name('detalle.pelicula')
->middleware('testyear');

Route::group(['prefix'=>'frutas'], function(){
    Route::get('index',[FrutaController::class,'index'])->name('fruta.index');
    //Route::get('detail/{id}',[FrutaController::class,'detail']);
    Route::get('/detail/{id}', [ FrutaController::class, 'detail' ])->name('fruta.detail');
    Route::get('crear', [ FrutaController::class, 'crear' ])->name('fruta.crear');
    Route::post('save', [ FrutaController::class, 'save' ])->name('fruta.save');
    Route::get('/delete/{id}', [ FrutaController::class, 'delete' ])->name('fruta.delete');
    Route::get('/edit/{id}', [ FrutaController::class, 'edit' ])->name('fruta.edit');
    Route::post('update', [ FrutaController::class, 'update' ])->name('fruta.update');

});




/*
comando laravel 5
Route::get('/detalle/{year?}','middleware' => 'testyear', [PeliculaController::class,'detalle']);

Route::get('/detalle',[
    'uses' => 'PeliculaController@detalle',
    'as' => 'detalle.pelicula'
    ]);
*/

Route::get('/redirigir',[PeliculaController::class,'redirigir']);

Route::get('/formulario',[PeliculaController::class,'formulario']);

Route::post('/recibir',[PeliculaController::class,'recibir'])->name('pelicula.save');;

Route::resource('usuario',UsuarioController::class);

/*
laravel 5
Route::post('usuario',UsuarioController@recibir);
*/

/*
GET: Conseguir datos
POST: Guardar datos
PUT: Actualizar recursos
DELETE: Eliminar recursos
*/

/*
Route::get('/mostrar-fecha',function(){
   $titulo = "Estoy mostrando la fecha";
   return view('mostrar-fecha', array(
    'titulo'=>$titulo
    ));

});

Route::get('pelicula/{titulo}/{year?}', function($titulo='No hay una pelicula seleccionada',$year=2023){
    return view('pelicula',array(
        'titulo'=> $titulo,
        'year'=> $year
    ));

})->where(array(
    'titulo'=>'[a-zA-Z]+',
    'year'=>'[0-9]+'
));


Route::get('/listado-peliculas',function(){

    $titulo = "Listado de peliculas";
    $listado = array('Batman', 'Spiderman', 'Gran torino');

    return view('peliculas.listado')
    ->with('titulo', $titulo)
    ->with('listado', $listado);

});

Route::get('pagina-generica', function(){
    return view('pagina');

});
*/