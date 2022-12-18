<?php

namespace App\Services;
use App\Models\Subscriber;
use Illuminate\Bus\Batch;
use Illuminate\Support\Facades\Bus;
use App\Jobs\SendReminderEmail;
use App\Mail\WelcomeTemplate;
use App\Mail\NotificationTemplate;
use App\Mail\OffersTemplate;

class SubscriberMailService
{

    public function dispatchJob($template)
    {   
        if($template):

            $job = (new \App\Jobs\SendQueueEmail($template));

            dispatch($job);

        endif;
        
    }


   
}
