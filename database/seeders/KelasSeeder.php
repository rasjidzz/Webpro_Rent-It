<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $class = [
            [
                'id_facility' => '1',
                'room' => '0701',
            ],
            [
                'id_facility' => '1',
                'room' => '0702',
            ],
            [
                'id_facility' => '1',
                'room' => '0703',
            ],
            [
                'id_facility' => '2',
                'room' => '0401',
            ],
            [
                'id_facility' => '2',
                'room' => '0401',
            ],
            [
                'id_facility' => '3',
                'room' => '0204',
            ],
            [
                'id_facility' => '3',
                'room' => '0201',
            ],
            [
                'id_facility' => '3',
                'room' => '0202',
            ],
            [
                'id_facility' => '3',
                'room' => '0203',
            ],
        ];
        DB::table('kelas')->insert($class);
    }
}
