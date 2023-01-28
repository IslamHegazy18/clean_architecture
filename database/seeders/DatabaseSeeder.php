<?php

namespace Database\Seeders;

use Domain\Blogging\Models\Post;
use Domain\Shared\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        // $this->call(DefaultUserSeeder::class);

        Post::factory(20)->for(
            User::factory()->create([
                'first_name'=>'Islam',
                'last_name'=>'Khaled',
                'email'=>'islam@gmail.com',
            ])
        )->create();
    }
}
