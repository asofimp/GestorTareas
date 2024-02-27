<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
//para hacer uso de las clase creadas se utiliza la ruta en la que se creo este clase
use App\Http\Controllers\Admin\AdminController;
//ruta del controler creado
use App\Http\Controllers\UserController;
//ruta del controlador prueba
use App\Http\Controllers\Administrator\AdministratorController;
use App\Http\Controllers\Administrator\DashboardController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



//Creacion de grupo de rutas
Route::namespace('Admin')->group(function(){
    Route::get('/micontroller1', [AdminController::class, 'index1']);

    Route::get('/micontroller2', [AdminController::class, 'index2']);
    
    Route::get('/micontroller3', [AdminController::class, 'index3']);
});

//tiene un nombre de ruta pero se le indica que adentro contiene un grupo de rutas
//que se le agrega el prefijo seccion
Route::prefix('seccion')->group(function(){
    
    Route::get('/primera', function(){
        return "Primera";
    });

    Route::get('/segunda', function(){
        return "Segunda";
    });

    Route::get('/tercera', function(){
        return "Tercera";
    });
});


 //ruta del controlador creado UserController
//Route::get('/nombre/{name}', [UserController::class, 'showName']);
//ruta de controlador creado en UserController           en esta parte estamos enviando un valor por parametro
/*Route::get('/inicio', [UserController::class, 'index'])->middleware('checkage:80');*/

Route::get('/operacion/{num?}', [UserController::class, 'suma']);

//ruta prueba
//el middleware la tarea que realiza es la autenticacion de este antes de abrir cualquiera de las rutas
Route::namespace('Administrator')->middleware('groupMiddleware')->group(function(){
    Route::get('/administrator',[AdministratorController::class, 'index']);
    Route::get('/dashdoardAdmin',[DashboardController::class, 'index']);
});

Route::view('/react','example');