<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'administrator'],
            ['name'=>'user'],
            ['name'=>'customer'],
            ['name'=>'dealer'],
        ];

        foreach ($roles as $role) {
            Role::query()->create($role);
        }
    }
}
