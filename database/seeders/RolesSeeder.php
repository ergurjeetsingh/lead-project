<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use Carbon\Carbon;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = array(
            ['name' => 'Super Admin','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['name' => 'Customer User','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['name' => 'Service Provider','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
        );

        Role::insert($roles);
    }
}
