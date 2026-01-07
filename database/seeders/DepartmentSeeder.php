<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('departments')->insert([
            [
                'school_id' => '1',
                'name' => 'Bidang Tata Usaha',
                'description' => 'lorem ipsum..',

            ],
            [
                'school_id' => '1',
                'name' => 'Bidang Sarana & Prasarana',
                'description' => 'lorem ipsum..',

            ],
            [
                'school_id' => '1',
                'name' => 'Bidang Kesiswaan',
                'description' => 'lorem ipsum..',

            ],
            [
                'school_id' => '1',
                'name' => 'Bidang Kurikulum',
                'description' => 'lorem ipsum..',

            ],
            [
                'school_id' => '1',
                'name' => 'Bidang Hubungan Industri',
                'description' => 'lorem ipsum..',

            ],
            [
                'school_id' => '1',
                'name' => 'Bidang Hubungan Masyarakat',
                'description' => 'lorem ipsum..',

            ],
        ]);
    }
}
