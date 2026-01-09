<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('skills')->insert([
            [
                'name' => 'Tersertifikasi Bahasa Inggris',
                'type' => 'soft',
            ],
            [
                'name' => 'Tersertifikasi Jepang',
                'type' => 'soft',
            ],
            [
                'name' => 'Desainer Grafis',
                'type' => 'technical',
            ],
            [
                'name' => 'Excel,Word,PowerPoint',
                'type' => 'technical',
            ],
            [
                'name' => 'Las Listrik',
                'type' => 'technical',
            ],
            [
                'name' => 'Membubut',
                'type' => 'technical',
            ],
        ]);
    }
}
