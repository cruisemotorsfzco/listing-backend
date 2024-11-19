<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::query()->where('email', 'chairman@cruisemotors.co')->first();

        Company::query()->create([
            'user_id' => $user->id,
            'code' => 'CM-24-11-001',
            'name' => 'Cruise Motors FZCO',
        ]);
    }
}
