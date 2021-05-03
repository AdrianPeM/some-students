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
            'fa_icon' => 'fa-th'
        ]);

        $notification_type = NotificationType::create([
            'type' => 'seleccion_especialidad',
            'display_type' => 'Selección de especialidad',
            'fa_icon' => 'fa-book'
        ]);

        $notification_type = NotificationType::create([
            'type' => 'extraescolares',
            'display_type' => 'Actividades extraescolares',
            'fa_icon' => 'fa-football-ball'
        ]);

        $notification_type = NotificationType::create([
            'type' => 'complementarias',
            'display_type' => 'Actividades complementarias',
            'fa_icon' => 'fa-chalkboard-teacher'
        ]);

        $notification_type = NotificationType::create([
            'type' => 'servicio_social',
            'display_type' => 'Servicio social',
            'fa_icon' => 'fa-tools'
        ]);

        $notification_type = NotificationType::create([
            'type' => 'residencias_profesionales',
            'display_type' => 'Residencias profesionales',
            'fa_icon' => 'fa-briefcase'
        ]);
    }
}
