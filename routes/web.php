<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\ComplementaryActivityController;
use App\Http\Controllers\SocialServiceController;
use App\Http\Controllers\ResidenceController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserNotificationController;

require __DIR__.'/auth.php';


Route::get('/test', [PagesController::class, 'test'])->name('test');

Route::get('/welcome', [PagesController::class, 'welcome'])->name('welcome');

Route::get('/', [PagesController::class, 'dashboard'])->name('reticula');

Route::get('/notificaciones', [UserNotificationController::class, 'index'])->name('notificaciones');

Route::get('/viewNotfs', [UserNotificationController::class, 'viewNotfs'])->name('notificaciones_vistas');

Route::post('/viewNotfs', [UserNotificationController::class, 'viewNotfsPost'])->name('notificaciones_vistas_post');

Route::get('/extraescolares', [ExtracurricularController::class, 'index'])->name('extraescolares');

Route::get('/actividades_complementarias', [ComplementaryActivityController::class, 'index'])->name('actividades_complementarias');

Route::get('/servicio_social', [SocialServiceController::class, 'index'])->name('servicio_social');

Route::get('/residencias', [ResidenceController::class, 'index'])->name('residencias');

Route::get('/materias', [SubjectController::class, 'index'])->name('materias');
