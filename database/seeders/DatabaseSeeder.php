<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        try {
            DB::table('tbl_admin')->insert([
                'admin_name' => 'admin',
                'admin_email' => 'admin@gmail.com',
                'admin_phone' => '0934065565',
                'admin_password' => Hash::make('12345678')
            ]);
        }catch (\Exception $exception){
            Log::error("[Seed Admin]". $exception->getMessage());
        }
    }
}
