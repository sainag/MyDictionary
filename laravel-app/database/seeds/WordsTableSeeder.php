<?php

use Illuminate\Database\Seeder;

class WordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('words')->delete();
        $words=array(['word'=>'Modest','meaning'=>'Refusing to take any credit','language'=>'English','note'=>'','created_at'=>new DateTime,'updated_at'=>new DateTime],
          ['word'=>'Impenetrable','meaning'=>'Impossible to enter','language'=>'English','note'=>'','created_at'=>new DateTime,'updated_at'=>new DateTime],
          ['word'=>'Obscured','meaning'=>'keep from being seen','language'=>'English','note'=>'','created_at'=>new DateTime,'updated_at'=>new DateTime]);

        DB::table('words')->insert($words);
    }
}
