<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
        ['email'=>'admin@gmail.com'],
                    ['name'=>'admin',
                    'password'=>Hash::make('password'),
                    'status'=>'approved',
                    'role'=>'admin'
                    ]
        );
    }
}
