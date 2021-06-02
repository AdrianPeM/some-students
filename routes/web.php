<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\ComplementaryActivityController;
use App\Http\Controllers\SocialServiceController;
use App\Http\Controllers\SocialServiceReportController;
use App\Http\Controllers\ResidenceController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserNotificationController;
use App\Http\Controllers\GeneralInformationController;

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
Route::get('/extraescolares/registro', [ExtracurricularController::class, 'create'])->name('extraescolares.registro');
Route::post('/extraescolares', [ExtracurricularController::class, 'store'])->name('extraescolares');
Route::get('/extraescolares/{extracurricular}/edit', [ExtracurricularController::class, 'edit'])->name('extraescolares.edit');
Route::put('/extraescolares/{extracurricular}', [ExtracurricularController::class, 'update'])->name('extraescolares.update');
Route::delete('/extraescolares/{extracurricular}', [ExtracurricularController::class, 'destroy'])->name('extraescolares.destroy');


//---------------------Actividades Complementarias---------------------
Route::get('/actividades_complementarias', [ComplementaryActivityController::class, 'index'])->name('actividades_complementarias');
Route::get('/actividades_complementarias/registro', [ComplementaryActivityController::class, 'create'])->name('actividades_complementarias.registro');
Route::post('/actividades_complementarias', [ComplementaryActivityController::class, 'store'])->name('actividades_complementarias');
Route::get('/actividades_complementarias/{complementaryActivity}/edit', [ComplementaryActivityController::class, 'edit'])->name('actividades_complementarias.edit');
Route::put('/actividades_complementarias/{complementaryActivity}', [ComplementaryActivityController::class, 'update'])->name('actividades_complementarias.update');
Route::delete('/actividades_complementarias/{complementaryActivity}', [ComplementaryActivityController::class, 'destroy'])->name('actividades_complementarias.destroy');


//---------------------Servicio Social---------------------
Route::get('/servicio_social', [SocialServiceController::class, 'index'])->name('servicio_social');
Route::get('/servicio_social/registro', [SocialServiceController::class, 'create'])->name('servicio_social_registro');
Route::post('/servicio_social', [SocialServiceController::class, 'store'])->name('servicio_social');
Route::get('/servicio_social/{socialService}/edit', [SocialServiceController::class, 'edit'])->name('servicio_social.edit');
Route::put('/servicio_social/{socialService}', [SocialServiceController::class, 'update'])->name('servicio_social_update');
Route::delete('/servicio_social/{socialService}', [SocialServiceController::class, 'destroy'])->name('servicio_social.destroy');
Route::post('/addHours', [SocialServiceController::class, 'addHoursPost'])->name('agregar_horas_post');
Route::get('/addHours', [SocialServiceController::class, 'addHours'])->name('agregar_horas');
Route::post('/removeHours', [SocialServiceController::class, 'removeHoursPost'])->name('eliminar_horas_post');
Route::get('/removeHours', [SocialServiceController::class, 'removeHours'])->name('eliminar_horas');

//-------------------------Servicio Social Reportes -------------------
Route::get('/servicio_social_reporte/registro', [SocialServiceReportController::class, 'create'])->name('servicio_social_reporte_registro');
Route::post('/servicio_social_reporte', [SocialServiceReportController::class, 'store'])->name('servicio_social_reporte');
Route::get('/servicio_social_reporte/{socialServiceReport}/edit', [SocialServiceReportController::class, 'edit'])->name('servicio_social_reporte.edit');
Route::put('/servicio_social_reporte/{socialServiceReport}', [SocialServiceReportController::class, 'update'])->name('servicio_social_reporte_update');
Route::delete('/servicio_social_reporte/{socialServiceReport}', [SocialServiceReportController::class, 'destroy'])->name('servicio_social_reporte.destroy');


//---------------------Residencias---------------------
Route::get('/residencias', [ResidenceController::class, 'index'])->name('residencias');

//---------------------Materias---------------------
Route::get('/materias', [SubjectController::class, 'index'])->name('materias');
Route::post('/subject_status', [SubjectController::class, 'updateStatus'])->name('update_subject_status');

//---------------------Informacion General---------------------
Route::get('/informacion_general', [GeneralInformationController::class, 'index'])->name('informacion_general');