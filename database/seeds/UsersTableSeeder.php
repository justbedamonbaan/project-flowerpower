<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $userRole = Role::where('name', 'user')->first();

        $user =  User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'voorletters' => 'user',
            'tussenvoegsel' => '',
            'achternaam' => 'china',
            'adres' => 'chinatown',
            'postcode' => 'ch124',
            'woonplaats' => 'china',
            'geboortedatum' => '1999-11-28',

            'password' => Hash::make('12345678')
        ]);


        $admin =  User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'voorletters' => 'admin',
            'tussenvoegsel' => '',
            'achternaam' => 'china',
            'adres' => 'chinatown',
            'postcode' => 'ch124',
            'woonplaats' => 'china',
            'geboortedatum' => '1999-11-28',

            'password' => Hash::make('12345678')
        ]);

        $user->roles()->attach($userRole);
        $admin->roles()->attach($adminRole);
    }
}
