<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
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
        if (User::count() == 0) {

            User::create([
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'age'            => 50,
                'password'       => Hash::make('password'),
                'remember_token' => Str::random(60),
                'role_id'        => 1,
            ]);

            User::create([
                'name'           => 'user1',
                'age'            => 18,
                'email'          => 'user1@gmail.com',
                'password'       => Hash::make('password'),
                'role_id'        => 2,
            ]);

            User::create([
                'name'           => 'user2',
                'age'            => 19,
                'email'          => 'user2@gmail.com',
                'password'       => Hash::make('password'),
                'role_id'        => 2,
            ]);

            User::create([
                'name'           => 'user3',
                'age'            => 20,
                'email'          => 'user3@gmail.com',
                'password'       => Hash::make('password'),
                'role_id'        => 2,
            ]);

            User::create([
                'name'           => 'user4',
                'age'            => 22,
                'email'          => 'user4@gmail.com',
                'password'       => Hash::make('password'),
                'role_id'        => 2,
            ]);

            User::create([
                'name'           => 'user5',
                'age'            => 43,
                'email'          => 'user5@gmail.com',
                'password'       => Hash::make('password'),
                'role_id'        => 2,
            ]);

            User::create([
                'name'           => 'user6',
                'age'            => 11,
                'email'          => 'user6@gmail.com',
                'password'       => Hash::make('password'),
                'role_id'        => 2,
            ]);

            User::create([
                'name'           => 'user7',
                'age'            => 18,
                'email'          => 'user7@gmail.com',
                'password'       => Hash::make('password'),
                'role_id'        => 2,
            ]);

            User::create([
                'name'           => 'user8',
                'age'            => 50,
                'email'          => 'user8@gmail.com',
                'password'       => Hash::make('password'),
                'role_id'        => 2,
            ]);

            User::create([
                'name'           => 'user9',
                'age'            => 26,
                'email'          => 'user9@gmail.com',
                'password'       => Hash::make('password'),
                'role_id'        => 2,
            ]);

            User::create([
                'name'           => 'user10',
                'age'            => 19,
                'email'          => 'user10@gmail.com',
                'password'       => Hash::make('password'),
                'role_id'        => 2,
            ]);

            User::create([
                'name'           => 'user11',
                'age'            => 29,
                'email'          => 'user11@gmail.com',
                'password'       => Hash::make('password'),
                'role_id'        => 2,
            ]);

            User::create([
                'name'           => 'user12',
                'age'            => 27,
                'email'          => 'user12@gmail.com',
                'password'       => Hash::make('password'),
                'role_id'        => 2,
            ]);

            User::create([
                'name'           => 'user13',
                'age'            => 30,
                'email'          => 'user13@gmail.com',
                'password'       => Hash::make('password'),
                'role_id'        => 2,
            ]);

            User::create([
                'name'           => 'user14',
                'age'            => 27,
                'email'          => 'user14@gmail.com',
                'password'       => Hash::make('password'),
                'role_id'        => 2,
            ]);

            User::create([
                'name'           => 'user15',
                'age'            => 25,
                'email'          => 'user15@gmail.com',
                'password'       => Hash::make('password'),
                'role_id'        => 2,
            ]);

            User::create([
                'name'           => 'user16',
                'age'            => 29,
                'email'          => 'user16@gmail.com',
                'password'       => Hash::make('password'),
                'role_id'        => 2,
            ]);

            User::create([
                'name'           => 'user17',
                'age'            => 18,
                'email'          => 'user17@gmail.com',
                'password'       => Hash::make('password'),
                'role_id'        => 2,
            ]);

            User::create([
                'name'           => 'user18',
                'age'            => 18,
                'email'          => 'user18@gmail.com',
                'password'       => Hash::make('password'),
                'role_id'        => 2,
            ]);

            User::create([
                'name'           => 'user19',
                'age'            => 38,
                'email'          => 'user19@gmail.com',
                'password'       => Hash::make('password'),
                'role_id'        => 2,
            ]);

            User::create([
                'name'           => 'user20',
                'age'            => 47,
                'email'          => 'user20@gmail.com',
                'password'       => Hash::make('password'),
                'role_id'        => 2,
            ]);
        }
    }
}
