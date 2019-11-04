<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        for($i = 0; $i <10; $i++){
            DB::table('users')->insert([
                'meno' => str_random(3),
                'priezvisko' => str_random(3),
                'email' => str_random(3)."@mail.sk",
                'heslo' => bcrypt(str_random(5)),
                'vek' => mt_rand(18, 80),
            ]);
        }
    }
}
