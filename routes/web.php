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

Route::get('/', [PagesController::class, 'index'])->name('reticula');

Route::get('/notificaciones', [UserNotificationController::class, 'index'])->name('notificaciones');

Route::get('/viewNotfs', [UserNotificationController::class, 'viewNotfs'])->name('notificaciones_vistas');

Route::post('/viewNotfs', [UserNotificationController::class, 'viewNotfsPost'])->name('notificaciones_vistas_post');

Route::get('/extraescolares', [ExtracurricularController::class, 'index'])->name('extraescolares');

Route::get('/actividades_complementarias', [ComplementaryActivityController::class, 'index'])->name('actividades_complementarias');

Route::get('/servicio_social', [SocialServiceController::class, 'index'])->name('servicio_social');

Route::get('/servicio_social/registro', [SocialServiceController::class, 'create'])->name('servicio_social_registro');

Route::post('/servicio_social', [SocialServiceController::class, 'store'])->name('servicio_social');

Route::get('/servicio_social/{socialService}/edit', [SocialServiceController::class, 'edit']);

Route::post('/servicio_social/{socialService}', [SocialServiceController::class, 'update'])->name('servicio_social_update');

Route::post('/addHours', [SocialServiceController::class, 'addHoursPost'])->name('agregar_horas_post');

Route::get('/addHours', [SocialServiceController::class, 'addHours'])->name('agregar_horas');

Route::post('/removeHours', [SocialServiceController::class, 'removeHoursPost'])->name('eliminar_horas_post');

Route::get('/removeHours', [SocialServiceController::class, 'removeHours'])->name('eliminar_horas');

Route::get('/residencias', [ResidenceController::class, 'index'])->name('residencias');

Route::get('/materias', [SubjectController::class, 'index'])->name('materias');
Route::post('/subject_status', [SubjectController::class, 'updateStatus']);
