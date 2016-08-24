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
        DB::table('users')->delete();
        $users=array(['name'=>'Sai','email'=>'saithewebguy@gmail.com','password'=>'test','created_at'=>new DateTime,'updated_at'=>new DateTime],
          ['name'=>'Stark','email'=>'stark@gmail.com','password'=>'NedStark','created_at'=>new DateTime,'updated_at'=>new DateTime],
          ['name'=>'Jon Snow','email'=>'snow@gmail.com','password'=>'Dany','created_at'=>new DateTime,'updated_at'=>new DateTime]);

        DB::table('users')->insert($users);
    }
}
