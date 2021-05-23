<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NotificationType;

class NotificationTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notification_type = NotificationType::create([
            'type' => 'avance_reticular',
            'display_type' => 'Avance reticular',
            'fa_icon' => 'fa-th',
            'fa_color' => 'text-blue'
        ]);

        $notification_type = NotificationType::create([
            'type' => 'seleccion_especialidad',
            'display_type' => 'Selección de especialidad',
            'fa_icon' => 'fa-book',
            'fa_color' => 'text-yellow-dark'
        ]);

        $notification_type = NotificationType::create([
            'type' => 'extraescolares',
            'display_type' => 'Actividades extraescolares',
            'fa_icon' => 'fa-football-ball',
            'fa_color' => 'text-yellow-dark'
        ]);

        $notification_type = NotificationType::create([
            'type' => 'complementarias',
            'display_type' => 'Actividades complementarias',
            'fa_icon' => 'fa-chalkboard-teacher',
            'fa_color' => 'text-indigo'
        ]);

        $notification_type = NotificationType::create([
            'type' => 'servicio_social',
            'display_type' => 'Servicio social',
            'fa_icon' => 'fa-tools',
            'fa_color' => 'text-gray'
        ]);

        $notification_type = NotificationType::create([
            'type' => 'residencias_profesionales',
            'display_type' => 'Residencias profesionales',
            'fa_icon' => 'fa-briefcase',
            'fa_color' => 'text-gray-dark'
        ]);

        $notification_type = NotificationType::create([
            'type' => 'informacion',
            'display_type' => 'Información',
            'fa_icon' => 'fa-info-circle',
            'fa_color' => 'text-blue'
        ]);

        $notification_type = NotificationType::create([
            'type' => 'advertencia',
            'display_type' => 'Advertencia',
            'fa_icon' => 'fa-exclamation-triangle',
            'fa_color' => 'text-yellow-light'
        ]);

        $notification_type = NotificationType::create([
            'type' => 'error',
            'display_type' => 'Error',
            'fa_icon' => 'fa-exclamation-circle',
            'fa_color' => 'text-red'
        ]);
    }
}
