<?php

namespace Database\Seeders;

use App\Models\Roles;
use App\Models\Users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $admin = Roles::factory()::create([
            'name'=>'Admin'
        ]);
        $bus = Roles::factory()::create([
            'name'=>'Business'
        ]);
        Roles::factory()::create([
            'name'=>'Customer'
        ]);

        Users::factory()::create([
            'roles_id'=>$admin->id,
           'name'=>'testadmin',
           'email'=>'testadmin@gmail.com',
            'password'=>'$2y$10$4zst8XGj7v19ewjOHDVqWOEVwqOpq4tFEtpq1OdAIOuvdpSuLksT6',
            'contactnumber'=>'0300000000',


        ]);

        Users::factory()::create([
            'roles_id'=>$bus->id,
            'name'=>'testbusiness',
            'email'=>'testbusiness@gmail.com',
            'password'=>'$2y$10$4zst8XGj7v19ewjOHDVqWOEVwqOpq4tFEtpq1OdAIOuvdpSuLksT6',
            'contactnumber'=>'0300000000',


        ]);
    }
}
