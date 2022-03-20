<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
            ['first_name'=>'Tom','last_name'=>'Holland','status'=>'1','phone_number'=>'9807869800','details'=>'I am Tom Holland.I am Spider Man'],
            ['first_name'=>'Scarlett','last_name'=>'Johansen','status'=>'1','phone_number'=>'9876543210','details'=>'I am Scarlett Johansen.I am Black Widow.'],
            ['first_name'=>'Chris','last_name'=>'Evans','status'=>'0','phone_number'=>'9876543210','details'=>'I am Chris Evans.I am Captain America.'],
            ['first_name'=>'Tony','last_name'=>'Stark','status'=>'0','phone_number'=>'9876543210','details'=>'I am Tony Stark.I am an Iron Man.'],
        ];
        foreach ($users as $user) {
            User::create($user);    
        }
    }
}
