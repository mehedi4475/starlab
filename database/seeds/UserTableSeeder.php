<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\user;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Mehedi Hasan',
            'username' => 'admin    ',
            'email'    => 'mehedi4475@gmail.com ',
            'password' => Hash::make('testpassword'),
        ));
    }

}