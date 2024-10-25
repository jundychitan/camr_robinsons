<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('user_tb')->insert([
            'user_name' => 'admin',
			'user_real_name' => 'DEC',
            'user_password' => '$2y$10$mf.POMmfskSb1frX84JdOeu.D4iFT0ot1sO0LBthCw0rRKkcavkJi',
            'user_type' => 'Admin',
			'created_at' => NOW(),
            'created_by_user_idx' => 0,
			'updated_at' => NOW(),
            'modified_by_user_idx' => 0
        ]);
    }
}
