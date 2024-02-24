<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          // Truncate the users table to remove existing data
          // User::truncate();
        User::create([
          'name' => 'Admin',
          'email' => 'admin@example.com',
          'password' => Hash::make('12345678'),
          'usertype' => '1', // User type 1 for Super Admin, User type 2 for Sub Admin, User type 3 for Delivery man And User type 4 for 0 for client or users
        ]);
        User::create([
          'name' => 'Sub Admin',
          'email' => 'subadmin@example.com',
          'password' => Hash::make('12345678'),
          'usertype' => '3', // User type 1 for Super Admin, User type 2 for Sub Admin, User type 3 for Delivery man And User type 4 for 0 for client or users
        ]);
        User::create([
          'name' => 'Delivery Man',
          'email' => 'deliveryman@example.com',
          'password' => Hash::make('12345678'),
          'usertype' => '2', // User type 1 for Super Admin, User type 2 for Sub Admin, User type 3 for Delivery man And User type 4 for 0 for client or users
        ]);
        User::create([
          'name' => 'User',
          'email' => 'user@example.com',
          'password' => Hash::make('12345678'),
          'usertype' => '0', // User type 1 for Super Admin, User type 2 for Sub Admin, User type 3 for Delivery man And User type 4 for 0 for client or users
        ]);
    }
}
