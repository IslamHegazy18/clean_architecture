<?php

namespace Database\Seeders;

use Domain\Shared\Models\User;
use Illuminate\Database\Seeder;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'first_name'=>'Islam',
            'last_name'=>'Khaled',
            'email'=>'islam@gmail.com',
        ]);
    }
}
