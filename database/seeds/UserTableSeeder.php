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
        $usr = new User;
        $usr->name = 'Jeremias';
        $usr->email = 'jeremias@gmail.com';
        $usr->password = bcrypt('admin');
        $usr->role = 'Admin';
        $usr->image = 'imgs/photos/Jeremias.png';
        $usr->save();

        User::create(array(
          'name' => 'Homero Simpson',
          'email' => 'homero@gmail.com',
          'password' => bcrypt('customer'),
          'role' => 'Customer',
          'image' => 'imgs/photos/homero.png'
        ));
    }
}
