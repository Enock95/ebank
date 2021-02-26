<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
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
        User::truncate();
        DB::table('role_user')->truncate();

       $admin = user::create([
            'name'=>'admin',
            'username'=>'user_admin',
            'email'=>'admin@admin.com',
            'password'=>Hash::make('password')
        ]);

       $auteur = user::create([
            'name'=>'auteur',
            'username'=>'user_auteur',
            'email'=>'auteur@auteur.com',
            'password'=>Hash::make('password')
        ]);

        $adminRole = Role::where('name','admin')->first();
        $auteurRole = Role::where('name','auteur')->first();

        $admin->roles()->attach($adminRole);
        $auteur->roles()->attach($auteurRole);

    }
}
