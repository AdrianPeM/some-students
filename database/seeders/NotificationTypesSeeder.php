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
            'iconURL' => '/images/notifications/avance_reticular_Ic.svg'
        ]);

        $notification_type = NotificationType::create([
            'type' => 'seleccion_especialidad',
            'display_type' => 'Selección de especialidad',
            'iconURL' => '/images/notifications/seleccion_especialidad_Ic.svg'
        ]);

        $notification_type = NotificationType::create([
            'type' => 'extraescolares',
            'display_type' => 'Actividades extraescolares',
            'iconURL' => '/images/notifications/extraescolares_Ic.svg'
        ]);

        $notification_type = NotificationType::create([
            'type' => 'complementarias',
            'display_type' => 'Actividades complementarias',
            'iconURL' => '/images/notifications/complementarias_Ic.svg'
        ]);

        $notification_type = NotificationType::create([
            'type' => 'servicio_social',
            'display_type' => 'Servicio social',
            'iconURL' => '/images/notifications/servicio_social_Ic.svg'
        ]);

        $notification_type = NotificationType::create([
            'type' => 'residencias_profesionales',
            'display_type' => 'Residencias profesionales',
            'iconURL' => '/images/notifications/residencias_profesionales_Ic.svg'
        ]);
    }
}
