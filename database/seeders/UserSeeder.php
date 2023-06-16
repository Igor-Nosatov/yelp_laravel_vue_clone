<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = [
            [
                'id' => Str::uuid()->toString(),
                'first_name' => 'Sam',
                'last_name' => 'Winchester',
                'email' => 'sam_winchester@example.com',
                'password' => Hash::make('password1'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'first_name' => 'Din',
                'last_name' => 'Winchester',
                'email' => 'din_winchester@example.com',
                'password' => Hash::make('password2'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'first_name' => 'Mary',
                'last_name' => 'Winchester',
                'email' => 'mary_winchester@example.com',
                'password' => Hash::make('password3'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('users')->insert($users);

        $roleUser = [
            [
                'user_id' => $users['0']['id'],
                'role_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $users['1']['id'],
                'role_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $users['2']['id'],
                'role_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('role_user')->insert($roleUser);
    }
}
