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

//---------------------Notificaciones---------------------
Route::get('/notificaciones', [UserNotificationController::class, 'index'])->name('notificaciones');

Route::get('/viewNotfs', [UserNotificationController::class, 'viewNotfs'])->name('notificaciones_vistas');

Route::post('/viewNotfs', [UserNotificationController::class, 'viewNotfsPost'])->name('notificaciones_vistas_post');

//---------------------Reticula---------------------
Route::get('/', [PagesController::class, 'index'])->name('reticula');
Route::post('/update_semester', [PagesController::class, 'updateSemester'])->name('update_semester');
Route::post('/select_specialty', [PagesController::class, 'selectSpecialty'])->name('select_specialty');
Route::post('/remove_specialty', [PagesController::class, 'removeSpecialty'])->name('remove_specialty');

//---------------------Extraescolares---------------------
Route::get('/extraescolares', [ExtracurricularController::class, 'index'])->name('extraescolares');

//---------------------Actividades Complementarias---------------------
Route::get('/actividades_complementarias', [ComplementaryActivityController::class, 'index'])->name('actividades_complementarias');

//---------------------Servicio Social---------------------
Route::get('/servicio_social', [SocialServiceController::class, 'index'])->name('servicio_social');

//---------------------Residencias---------------------
Route::get('/residencias', [ResidenceController::class, 'index'])->name('residencias');

//---------------------Materias---------------------
Route::get('/materias', [SubjectController::class, 'index'])->name('materias');
Route::post('/subject_status', [SubjectController::class, 'updateStatus'])->name('update_subject_status');
