<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::firstOrCreate(['email' => 'student@mail.com'], [
            'name' => 'Admin',
            'last_name' => 'Admin',
            'career_id' => 1,
            'password' => Hash::make('123'),
        ]);

        // $role1 = Role::firstOrCreate([
        //     'name' => 'estudiante',
        // ]);

        // $user->careers()->save($career1);

        //Generate subjects status
        $subjects = $user->subjects();

        if(count($subjects) > 0) {
            foreach($subjects as $subject) {
                $exists = DB::table('subject_status')
                    ->where('user_id', $user->id)
                    ->where('subject_id', $subject->id)
                    ->first();
    
                if(!($exists)) {
                    DB::table('subject_status')->insert(
                        ['user_id' => $user->id, 'subject_id' => $subject->id, 'status' => 'blocked']
                    );
                }
            }
        }
    }
}
