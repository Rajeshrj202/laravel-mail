<?php

namespace App\Jobs;

use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\TestHelloEmail;
use Mail;
use DB;
class SendReminderEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $subscriber;

    public function __construct($subscriber=null)
    {
       $this->subscriber=$subscriber;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new TestHelloEmail();
        $emails = ['rajeshmourya202@gmail.com', 'rajesmoury67@gmail.com','johnty@byasatech.com'];
        DB::table('email_types')->insert(['email_type'=>1]);
           
    }
}
