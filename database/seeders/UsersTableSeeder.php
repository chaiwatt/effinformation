<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'ชัยวัฒน์',
                'email' => 'jo@localhost.com',
                'password' => Hash::make('11111111'), 
                'created_at' => Carbon::now()->toDateString()
            ]
        ]);
    }
}
