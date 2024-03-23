<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserAdminTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'swan yee myo',
            'email' => 'swanyeemyo2001@gmail.com',
            'password' => Hash::make('admin1234')
        ]);
    }
}
