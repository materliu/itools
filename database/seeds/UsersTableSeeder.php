<?php

use Illuminate\Database\Seeder;
use \App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(App\User::class, 1)->create()->each(function ($u) {
//            $u->stars()->save(factory(App\Tool::class)->make());
//        });

         $user = new User;
         $user->name = 'materliu';
         $user->email = 'materliu@gmail.com';
         $user->realname = 'materliu';
         $user->title = 'web developer';
         $user->password = Hash::make('');
         $user->rememberToken = '1TfBDeACaV';

         $user->save();
    }
}
