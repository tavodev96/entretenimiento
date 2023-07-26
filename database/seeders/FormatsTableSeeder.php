<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FormatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'         => 'DVD',
                'state'         => true
            ],
            [
                'name'         => 'Blue-ray',
                'state'         => true
            ],
            [
                'name'         => 'Play',
                'state'         => true
            ],
            [
                'name'         => 'Xbox',
                'state'         => true
            ],
            [
                'name'         => 'Nintendo',
                'state'         => true
            ],
        ];
        DB::table('formats')->insert($data);
    }
}
