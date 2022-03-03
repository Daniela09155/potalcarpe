<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HrFlexController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\PrincipalController;



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

Route::get('/', function () {
    return view('landing');
});

Route::get('register',[RegisterController::class,'create'])->name('register');
//rutas principales de las vistas 

Route::get('admin/empleados',[PrincipalController::class,'empleados'])->name('empleados');
Route::get('admin/horarios',[PrincipalController::class,'horarios'])->name('horarios');
//Route::get('admin/hrflex',[PrincipalController::class,'hrflex'])->name('hrflex');
Route::get('admin/solicitud',[PrincipalController::class,'solicitud'])->name('solicitud');
Route::get('admin/informes',[PrincipalController::class,'informes'])->name('informes');
Route::get('admin/calendario',[PrincipalController::class,'calendario'])->name('calendario');

//Alta
Route::get('altahorario',[HorarioController::class,'altahorario'])->name('altahorario');
Route::post('guardarhorario',[HorarioController::class,'guardarhorario'])->name('guardarhorario');
Route::get('admin/horarios',[HorarioController::class,'reportehorario'])->name('horarios');


//Operaciones
Route::get('desactivarhorario/{id_horario}', [HorarioController::class, 'desactivarhorario'])->name('desactivarhorario');        //Desactiva horarios
Route::get('activarhorario/{id_horario}', [HorarioController::class, 'activarhorario'])->name('activarhorario');        //Activa horarios
Route::get('eliminarhorario/{id_horario}', [HorarioController::class, 'eliminarhorario'])->name('eliminarhorario'); 

//Modificaciones
Route::get('modificarh/{id_horario}', [HorarioController::class, 'modificarh'])->name('modificarh'); //Guarda el registro de horarios
Route::post('guardarcambioh', [HorarioController::class, 'guardarcambioh'])->name('guardarcambioh'); //Guarda el registro de horarios

// rutas para horarios flexibles
Route::get('altahrflex',[HrFlexController::class,'altahrflex'])->name('altahrflex');
Route::post('guardarhrflex',[HrFlexController::class,'guardarhrflex'])->name('guardarhrflex');
Route::get('admin/hrflex',[HrFlexController::class,'reportehrflex'])->name('hrflex');

//Operaciones
Route::get('desactivarhrflex/{id_horariof}', [HrFlexController::class, 'desactivarhrflex'])->name('desactivarhrflex');        //Desactiva horarios
Route::get('activarhrflex/{id_horariof}', [HrFlexController::class, 'activarhrflex'])->name('activarhrflex');        //Activa horarios
Route::get('eliminarhrflex/{id_horariof}', [HrFlexController::class, 'eliminarhrflex'])->name('eliminarhrflex');
Route::get('modificarhrflex/{id_horariof}', [HrFlexController::class, 'modificarhrflex'])->name('modificarhrflex'); 
Route::post('guardarcambiohrflex', [HrFlexController::class, 'guardarcambiohrflex'])->name('guardarcambiohrflex');  



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Auth::routes();

Route::resource('/user','App\Http\Controllers\Backend\Role_User\UserController')->names('user');
Route::resource('/role','App\Http\Controllers\Backend\Role_User\RoleController')->names('role');
Route::resource('/category','App\Http\Controllers\Backend\Role_User\CategoryController')->names('category');
Route::resource('/permission','App\Http\Controllers\Backend\Role_User\PermissionController')->names('permission'); 
