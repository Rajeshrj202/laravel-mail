<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmailTypes;
use DB;

class EmailTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmailTypes::truncate();
        EmailTypes::create(['name'=>"Welcome Template","template"=>"mail-templates.welcome"]);
        EmailTypes::create(['name'=>"Notification Template","template"=>"mail-templates.notification"]);
        EmailTypes::create(['name'=>"Offers Template","template"=>"mail-templates.offers"]);
        
    }
}
