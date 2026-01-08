<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        Permission::firstOrCreate([
            'name' => 'accept_job_applicant',
            'guard_name' => 'web',
        ]);


        $superAdmin = Role::firstOrCreate(['name' => 'super_admin']);
        $hrAdmin = Role::firstOrCreate(['name' => 'hr_admin']);


        $superAdmin->givePermissionTo(Permission::all());
        $hrAdmin->givePermissionTo([
            'accept_job_applicant'
        ]);
    }
}
