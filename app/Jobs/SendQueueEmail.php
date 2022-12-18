<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Subscriber;
use Mail;

class SendQueueEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public $template;
    public $tries = 2; // 2 hours
    public $backoff = 2; // 2 hours

    public function __construct($template)
    {
       $this->template=$template;
    }

    /**
     * Execute the job.
     *
     * @return void
     */

    public function handle()
    {
        $emailtemplate = $this->template;
        
        Subscriber::where('isactive',1)->chunk(1000, function ($activeSubscriber) use($emailtemplate) {
             
            foreach($activeSubscriber as $subscriber):
                Mail::send($emailtemplate->template,[],function($message) use($subscriber,$emailtemplate){
                    $message->to($subscriber->email,$subscriber->name)->subject($emailtemplate->name);
                });
            endforeach;
                
        });

    }



}
