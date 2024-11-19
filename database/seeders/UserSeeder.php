<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::query()->create([
            'name' => 'Chairman',
            'email' => 'chairman@cruisemotors.co',
            'password' => Hash::make('CH-CM-MD-903')
        ]);

        $roles = Role::all();

        foreach ($roles as $role) {
            $user->assignRole($role);
        }
    }
}
