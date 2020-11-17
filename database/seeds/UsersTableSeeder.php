<?php

use App\Domains\Users\User;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

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

        factory(User::class)->create(
            [
                'name' => 'Jose',
                'email' => 'joses.ferrao@gmail.com',
                //'is_manager' => true,
                'password' => bcrypt('123456'),
                'remember_token' => Str::random(10),
                //'lastname' => 'dos Santos Ferrao',
                //'title' => 'Project Manager',
                'picture' => 'c4ca4238a0b923820dcc509a6f75849b.jpg',
            ]
        );
        factory(User::class)->create(
            [
                //'client_id' => '1',
                'name' => 'Antonio',
                //'lastname' => 'Rocha',
                //'is_manager' => true,
                'email' => 'a.rocha@britanniapayroll.com',
                'password' => bcrypt('sud@130'),
                'remember_token' => Str::random(10),
                'picture' => '02e74f10e0327ad868d138f2b4fdd6f0.png',
            ]
        );
        factory(User::class)->create(
            [
                //'client_id' => '1',
                'name' => 'Donavan',
                //'lastname' => 'Farquharson',
                //'is_manager' => true,
                'email' => 'd.farquharson@britanniapayroll.com',
                'password' => bcrypt('wT321$'),
                'remember_token' => Str::random(10),
                'picture' => '02e74f10e0327ad868d138f2b4fdd6f0.jpg',
            ]
        );
        factory(User::class)->create(
            [
                //'client_id' => '1',
                'name' => 'User',
                //'is_manager' => false,
                //'employee_id' => 2,
                'email' => 'user@ativa.com',
                'password' => bcrypt('ativa1234'),
                'remember_token' => Str::random(10),
                'picture' => 'user_image_6.png',
            ]
        );

        factory(User::class)->create(
            [
                //'client_id' => '2',
                'name' => 'Supervisor',
                //'is_manager' => true,
                //'employee_id' => 3,
                'email' => 'supervisor@client.com',
                'password' => bcrypt('ativa1234'),
                'remember_token' => Str::random(10),
                'picture' => 'user_image_12.jpg',
            ]
        );
        factory(User::class)->create(
            [
                //'client_id' => '2',
                'name' => 'User',
                //'is_manager' => false,
                //'employee_id' => 4,
                'email' => 'user@client.com',
                'password' => bcrypt('ativa1234'),
                'remember_token' => Str::random(10),
                'picture' => 'user_image_13.jpg',
            ]
        );

        factory(User::class, 20)->create();
    }
}
