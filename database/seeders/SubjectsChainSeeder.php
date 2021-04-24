<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SubjectsChainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subject_chain')->insert([
            ['subject_id' => 8, 'chain_id' => 1],
            ['subject_id' => 9, 'chain_id' => 2],
            ['subject_id' => 14, 'chain_id' => 8],
            ['subject_id' => 15, 'chain_id' => 9],
            ['subject_id' => 19, 'chain_id' => 8],
            ['subject_id' => 20, 'chain_id' => 14],
            ['subject_id' => 21, 'chain_id' => 8],
            ['subject_id' => 22, 'chain_id' => 15],
            ['subject_id' => 24, 'chain_id' => 18],
            ['subject_id' => 25, 'chain_id' => 19],
            ['subject_id' => 28, 'chain_id' => 23],
            ['subject_id' => 31, 'chain_id' => 25],
            ['subject_id' => 33, 'chain_id' => 27],
            ['subject_id' => 34, 'chain_id' => 28],
            ['subject_id' => 36, 'chain_id' => 30],
            ['subject_id' => 37, 'chain_id' => 31],
            ['subject_id' => 38, 'chain_id' => 32],
            ['subject_id' => 39, 'chain_id' => 33],
            ['subject_id' => 42, 'chain_id' => 36],
            ['subject_id' => 43, 'chain_id' => 37],
            ['subject_id' => 45, 'chain_id' => 38],
            ['subject_id' => 46, 'chain_id' => 39],
            ['subject_id' => 47, 'chain_id' => 40],
            ['subject_id' => 53, 'chain_id' => 48],
            ['subject_id' => 58, 'chain_id' => 39],
            ['subject_id' => 60, 'chain_id' => 58],
            ['subject_id' => 61, 'chain_id' => 58],
            ['subject_id' => 69, 'chain_id' => 62],
            ['subject_id' => 70, 'chain_id' => 63],
            ['subject_id' => 71, 'chain_id' => 64],
            ['subject_id' => 74, 'chain_id' => 69],
            ['subject_id' => 75, 'chain_id' => 70],
            ['subject_id' => 79, 'chain_id' => 69],
            ['subject_id' => 80, 'chain_id' => 74],
            ['subject_id' => 81, 'chain_id' => 70],
            ['subject_id' => 83, 'chain_id' => 77],
            ['subject_id' => 84, 'chain_id' => 78],
            ['subject_id' => 88, 'chain_id' => 83],
            ['subject_id' => 89, 'chain_id' => 83],
            ['subject_id' => 90, 'chain_id' => 84],
            ['subject_id' => 91, 'chain_id' => 85],
            ['subject_id' => 92, 'chain_id' => 86],
            ['subject_id' => 97, 'chain_id' => 90],
            ['subject_id' => 98, 'chain_id' => 92],
            ['subject_id' => 100, 'chain_id' => 95],
            ['subject_id' => 101, 'chain_id' => 96],
            ['subject_id' => 102, 'chain_id' => 93],
            ['subject_id' => 103, 'chain_id' => 98],
            ['subject_id' => 106, 'chain_id' => 102],
            ['subject_id' => 114, 'chain_id' => 93],
            ['subject_id' => 115, 'chain_id' => 109],
            ['subject_id' => 119, 'chain_id' => 92],
            ['subject_id' => 121, 'chain_id' => 119],
            ['subject_id' => 122, 'chain_id' => 121],
            ['subject_id' => 14, 'chain_id' => 12],
            ['subject_id' => 19, 'chain_id' => 12],
            ['subject_id' => 21, 'chain_id' => 12],
            ['subject_id' => 92, 'chain_id' => 87]
        ]);
    }
}
