<?php

use App\Http\Controllers\Dashboards\Admin\AuthController as AdminController;
use App\Http\Controllers\Web\SchedulingController as SchedulingWebController;
use App\Http\Controllers\Dashboards\Admin\SchedulingController as SchedulingAdminController;
use App\Http\Controllers\PdfviewController;
use App\Http\Controllers\Web\WebController;
use Illuminate\Support\Facades\Route;

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

Route::group(['as' => 'web.'], function () {
    Route::controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/gerar', 'gerar')->name('gerar');
    });
    Route::group(['prefix' => 'agenda', 'as' => 'scheduling.'], function () {
        Route::controller(SchedulingWebController::class)->group(function () {
            Route::get('/agendamento-finalizado/{scheduling}', 'finish')->name('finish');
            Route::post('/fazer-agendamento', 'store')->name('store');
        });
    });
});

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
    /*  Admin  */
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('/entrar', 'login')->name('login');
            Route::post('/entrar/do', 'do_login')->name('login.do');
        });
        Route::middleware('admin')->group(function () {
            Route::controller(AdminController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/perfil', 'perfil')->name('perfil');
                Route::put('/editar/do', 'do_edit')->name('edit.do');
                Route::put('/editar-foto/do', 'do_edit_photo')->name('edit_photo.do');
                Route::get('/sair', 'logout')->name('logout');
            });

            Route::group(['prefix' => 'agenda', 'as' => 'scheduling.'], function () {
                Route::controller(SchedulingAdminController::class)->group(function () {
                    Route::put('/novo-agendamento/{scheduling}', 'edit')->name('edit');
                });
            });
            Route::group(['prefix' => 'pdf', 'as' => 'pdf.'], function () {
                Route::controller(PdfviewController::class)->group(function () {
                    Route::get('/view/{scheduling}', 'view')->name('view');
                });
            });
        });
    });
});

/*Route::get("email", function (){
    $user = new \stdClass();
    $user->email = "juniornunes1008@gmail.com";
    $user->name = "Valter jr";
    \Illuminate\Support\Facades\Mail::send(new \App\Mail\newScheduling($user, '\App\Models\Scheduling::find(1)'));

    
    return;
});*/