<?php
namespace Database\Seeder;

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
        for ($i = 1; $i < 50; $i ++) {
            $data[] = [
                'username' => 'user' . $i,
                'email'    => 'userEmail' . $i . '@qq.com',
//                'face'     => 'http://owmb1f0qu.bkt.clouddn.com/test/beauty.jpg',
                'face'     => '/images/beauty.jpg',
                'password' => Hash::make('123456'),
                'active'   => 1,
                'status'   => 1,
            ];
        }
        \App\Models\User::insert($data);
    }
}
