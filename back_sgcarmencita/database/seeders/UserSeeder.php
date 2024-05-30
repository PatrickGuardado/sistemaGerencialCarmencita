<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $roles = Role::all()->keyBy('name');

        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role_id' => $roles['Administrador']->id,
        ]);

        User::create([
            'name' => 'Technical User',
            'email' => 'tech@example.com',
            'password' => Hash::make('password'),
            'role_id' => $roles['Usuario Técnico']->id,
        ]);

        User::create([
            'name' => 'Strategic User',
            'email' => 'strategic@example.com',
            'password' => Hash::make('password'),
            'role_id' => $roles['Usuario Estratégico']->id,
        ]);
    }
}
