<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->delete();

        $users = [
            ['id' => 1, 'name' => 'Drew Ewing', 'email' => 'aewing@kahping.com', 'password' => bcrypt('12345'), 'is_admin' => 1,'status' => 'verified'],
            ['id' => 2, 'name' => 'John Evano', 'email' => 'johnevano@gmail.com', 'password' => bcrypt('12345'), 'is_admin'=>0,'status' => 'verified'],
        ];

       foreach($users as $user){
			User::create($user);
		}
    }
}
