<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('schools')->insert([
            [
                'name' => 'SMK YPF 1 Kramatwatu',
                'level' => 'smk',
                'address' => 'Jl. Raya Griya Serdang Indah',
                'phone' => '0254 0001',
                'email' => 'fatser@gmail.sch.id',

            ],
            [
                'name' => 'SMK YPF 1 Cilegon',
                'level' => 'smk',
                'address' => 'Jl. Letjend R. Soeprapto',
                'phone' => '0254 0002',
                'email' => 'fatcil1@gmail.sch.id',

            ],
            [
                'name' => 'SMK YPF 2 Cilegon',
                'level' => 'smk',
                'address' => 'Jl. Letjend R. Soeprapto',
                'phone' => '0254 0003',
                'email' => 'fatcil2@gmail.sch.id',

            ],
            [
                'name' => 'SMP YPF Cilegon',
                'level' => 'smp',
                'address' => 'Jl. Letjend R. Soeprapto',
                'phone' => '0254 0004',
                'email' => 'smpfatcil@gmail.sch.id',

            ],
            [
                'name' => 'TK Fatahillah Kramatwatu',
                'level' => 'tk',
                'address' => 'Jl. Raya Griya Serdang Indah',
                'phone' => '0254 0005',
                'email' => 'tkfatser@gmail.sch.id',

            ],
            [
                'name' => 'TPA Fatahillah Kramatwatu',
                'level' => 'tpa',
                'address' => 'Jl. Raya Griya Serdang Indah',
                'phone' => '0254 0006',
                'email' => 'tpafatser@gmail.sch.id',

            ],
            [
                'name' => 'STT Fatahillah Kramatwatu',
                'level' => 's1',
                'address' => 'Jl. Raya Griya Serdang Indah',
                'phone' => '0254 0007',
                'email' => 'sttf@gmail.sch.id',

            ],

        ]);
    }
}
