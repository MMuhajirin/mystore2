<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Muhamad Muhajirin',
            'email' => 'muhamadmuhajirin@gmail.com',
            'password' => Hash::make('muh4mm4d'),
            'phone' => '0895803005252',
            'alamat' => 'Kediri',
            'role' => 'admin'
        ]);
    }
}
