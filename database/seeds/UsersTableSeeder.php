<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        User::truncate();

        $users=factory(User::class,10)->create();

        DB::table('users')->insert([
            'name' => 'Albi',
            'email' => 'albi@coach.com',
            'password' => bcrypt('58626682')
        ]);
    }
}