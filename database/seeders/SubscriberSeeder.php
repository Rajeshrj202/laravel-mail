<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subscriber;
use DB;
class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        ini_set('memory_limit','650M'); //allocate memory as per Big Data to seed
        Subscriber::truncate();
        Subscriber::factory()->count(env('SUBSCRIBER_SEED_COUNT'))->create();

    }
}
