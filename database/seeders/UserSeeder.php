<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "SENA",
            'email' => "david123@gmail.com",
            'password' => '$2y$10$e5lvUnyS64kvDOp4xnlbLeQ6vioTAr6tvlS5btB9zFGTqeppZQT6u'
        ]);
    }
}
