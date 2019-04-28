<?php

use Illuminate\Database\Seeder;
use App\models\User;
class UsersTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
        	'name'=>'admin',
        	'email'=>'admin@gmail.com',
        	'mobile'=>'123456',
        	'password'=>bcrypt('123456')

        ]);
    }
}
