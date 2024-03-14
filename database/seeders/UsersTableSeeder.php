<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //admin
        DB::table('users')->insert([
            [
                'full_name' => 'Đoàn Khiêm',
                'username' => 'doankhiem_admin',
                'email' => 'khiembi161219@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'admin',
                'status' => 'active',
            ],
            //vendor
            [
                'full_name' => 'Nguyễn Văn A',
                'username' => 'nguyenvanA_vendor',
                'email' => 'vendor@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'vendor',
                'status' => 'active',
            ],
            //customer
            [
                'full_name' => 'Nguyễn Văn B',
                'username' => 'nguyenvanB_customer',
                'email' => 'customer@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
                'status' => 'active',
            ]
        ]);
    }
}
