<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'title' => 'Reunião',
                'start' => '2021-07-07 08:00:00',
                'end' => '2021-07-07 08:00:00',
                'color' => '#c40233',
                'status' => 'Encerrado',
                'description' => 'Reuniao top',
            ],
        ]);

        DB::table('events')->insert([
            [
                'title' => 'Ligar p/cliente',
                'start' => '2021-07-20',
                'end' => '2021-07-20',
                'color' => '#2db6cf',
                'status' => 'Encerrado',
                'description' => 'Ligação importantissima',
            ]
        ]);
    }
}
