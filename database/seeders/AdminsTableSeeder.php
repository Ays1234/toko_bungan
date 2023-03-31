<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Admin::create([
            'name' => 'vl',
            'email' => 'admin@vl.com',
            'password' => bcrypt('admin1234'),
            'status' => 'super',
        ]);
    }
}
