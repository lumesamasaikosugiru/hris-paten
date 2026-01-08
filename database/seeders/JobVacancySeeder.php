<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobVacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('job_vacancies')->insert([
            [
                'job_title' => 'Tenaga Pendidik/Guru Pendidikan Pancasila',
                'job_desc' => 'Mengajar dan membuat RPP',
                'requirements' => 'S1 Pendidikan Pancasila - Perempuan/Laki-laki - Mampu mengoperasikan komputer',
                'salary' => '3500000',
            ],
            [
                'job_title' => 'Tenaga Pendidik/Guru Informatika',
                'job_desc' => 'Mengajar dan membuat RPP',
                'requirements' => 'S1 Teknik Informatika - Perempuan/Laki-laki - Mampu ngoding',
                'salary' => '3500000',
            ],
            [
                'job_title' => 'Tenaga Kependidikan - Toolman',
                'job_desc' => 'Merapikan Laboratorium/Bengkel',
                'requirements' => 'SMK Teknik Kompiter & Jaringan - Perempuan/Laki-laki - Mampu mengoperasikan komputer',
                'salary' => '2000000',
            ],
        ]);
    }
}
