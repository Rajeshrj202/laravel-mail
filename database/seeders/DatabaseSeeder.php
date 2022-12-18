<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\SubscriberSeeder;
use Database\Seeders\EmailTypeSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $this->call(SubscriberSeeder::class);
        $this->call(EmailTypeSeeder::class);
    }
}
