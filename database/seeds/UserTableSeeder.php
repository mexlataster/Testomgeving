<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'Dilivio';
        $admin->lastname = 'Cat';
        $admin->email = 'dilie_90@hotmail.com';
        $admin->password = bcrypt('Cat');
        $admin->woontplaats = 'Dordrecht';
        $admin->adres = 'Pearlbuck-erf 90';
        $admin->graduatie = 'Oranje';
        $admin->graduatie_behaald = '2003';
        $admin->role_id = 1;
        $admin->save();

        $user = new User();
        $user->name = 'Mex';
        $user->lastname = 'Lataster';
        $user->email = 'm.lataster1998@gmail.com';
        $user->password = bcrypt('Lataster');
        $user->woontplaats = 'Dordrecht';
        $user->adres = 'Mex-erf 90';
        $user->graduatie = 'Blauw';
        $user->graduatie_behaald = '2018';
        $user->role_id = 2;
        $user->save();

        $author = new User();
        $author->name = 'Mark';
        $author->lastname = 'Glim';
        $author->email = 'mark.glimmerveen@hotmail.com';
        $author->password = bcrypt('Glim');
        $author->woontplaats = 'Dordrecht';
        $author->adres = 'Aletta jacobs erf 90';
		$author->graduatie = 'Groen';
        $author->graduatie_behaald = '2017';
        $author->role_id = 3;
        $author->save();
    }
}
