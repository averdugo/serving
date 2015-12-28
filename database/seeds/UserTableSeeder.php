<?php

/**
 * Created by PhpStorm.
 * User: merki
 * Date: 28-12-15
 * Time: 10:33
 */

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     *
     */
    public function run()
    {
        \DB::table('users')->insert(array(

            'name'          => 'Aldo Verdugo',
            'email'         => 'aldo.vc.1985@gmail.com',
            'phone'         => '+56959054380',
            'address'       => 'aldohome 123',
            'password'      => \Hash::make('secret'),
        'user_type_id'  => '1'

        ));
    }
}