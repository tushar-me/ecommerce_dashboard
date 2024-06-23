<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(50)->create();

        DB::table('users')->insert([
            [
                'name' => 'Tushar - Admin',
                'email' => 'admin@admin.com',
                'role' => 'admin',
                'phone' => 'o1648550599',
                'password' => Hash::make('12345678'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tushar - Manager',
                'email' => 'manager@manager.com',
                'role' => 'manager',
                'phone' => 'o1648550599',
                'password' => Hash::make('12345678'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tushar - Customer',
                'email' => 'customer@customer.com',
                'role' => 'customer',
                'phone' => 'o1648550599',
                'password' => Hash::make('12345678'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
