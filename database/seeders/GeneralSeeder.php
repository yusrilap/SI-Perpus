<?php

namespace Database\Seeders;


use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Database\Seeders\UserSeeder;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::create([
            'name' => 'admin'
        ]);

        $role_anggota = Role::create([
            'name' => 'anggota'
        ]);

        $role_pustakawan = Role::create([
            'name' => 'pustakawan'
        ]);

        $permission = Permission::create([
            'name' => 'create'
        ]);
        $permission = Permission::create([
            'name' => 'update'
        ]);
        $permission = Permission::create([
            'name' => 'read'
        ]);
        $permission = Permission::create([
            'name' => 'delete'
        ]);

        $anggota = User::create([
            'username' => 'Anggota 1',
            'name' => 'Anggota 1',
            'email' => 'anggota@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $anggota->assignRole('anggota');


        $admin = User::create([
            'username' => 'Admin',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'username' => 'Pustakawan',
            'name' => 'Pustakawan',
            'email' => 'pustakawan@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $user->assignRole('pustakawan');
    }
};