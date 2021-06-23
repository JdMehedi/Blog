<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user= App\User::create([
            'name' => 'Mehedi Hasan',
            'email'=>'kpcmhd@gmail.com',
            'password'=>bcrypt('password'),
            'admin'=> 1
        ]);


        App\Profile::create([

            'user_id'=>$user->id,
            'avatar'=>'uploads/avatars/1.png',
            'about'=>'Lorem ipsum my db connection by profiling user tablto ',
            'facebook'=>'facebook.com',
            'youtube'=>'youtube.com'

        ]);
       
        
    }
}
