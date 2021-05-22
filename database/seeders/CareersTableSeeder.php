<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Career;

class CareersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $career1 = Career::firstOrCreate(['name' => 'sistemas'], [
            'name' => 'sistemas',
            'display_name' => 'Ing. en Sistemas Computacionales',
            'generic_credits' => 210,
            'total_credits' => 262
        ]);

        $career2 = Career::firstOrCreate(['name' => 'tics'], [
            'name' => 'tics',
            'display_name' => 'Ing. en Tecnologias de la Información y la Comunicación',
            'generic_credits' => 210,
            'total_credits' => 262
        ]);
    }
}
