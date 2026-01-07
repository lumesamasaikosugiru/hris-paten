<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('positions')->insert([
            [
                'name' => 'Pembina Yayasan',
                'level' => '1',
                'description' => 'lorem ipsum..',

            ],
            [
                'name' => 'Pengawas Yayasan',
                'level' => '2',
                'description' => 'lorem ipsum..',

            ],
            [
                'name' => 'Pengurus Yayasan',
                'level' => '3',
                'description' => 'lorem ipsum..',

            ],
            [
                'name' => 'Kabid Yayasan',
                'level' => '4',
                'description' => 'lorem ipsum..',

            ],
            [
                'name' => 'Staf Yayasan',
                'level' => '5',
                'description' => 'lorem ipsum..',

            ],
            [
                'name' => 'Wakasek',
                'level' => '6',
                'description' => 'lorem ipsum..',

            ],
            [
                'name' => 'Wakasek',
                'level' => '7',
                'description' => 'lorem ipsum..',

            ],
        ]);
    }
}
