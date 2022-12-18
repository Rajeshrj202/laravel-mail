<?php

namespace App\Http\Controllers;
use Database\Seeders\SubscriberSeeder;
use Illuminate\Http\Request;
use App\Services\SubscriberMailService;
use App\Jobs\SendReminderEmail;
use App\Models\Subscriber;
use App\Models\EmailTypes;
use Artisan;
class SubscriberController extends Controller
{
    
    public function index(Request $request)
    {
        $data['emailtemplates']=EmailTypes::all();
        $data['subscriber']=Subscriber::getActive();

        return view('dashboard',$data);
    }

    public function seed()
    {
        $seed=new SubscriberSeeder();
        $seed->run();
    }

    public function dispatchMail(Request $request,SubscriberMailService $subscriberMail)
    {
        $validated = $request->validate([
            'email_type_id' => 'required'
        ]);

        $template_id=$request->email_type_id;
        $templatedata=EmailTypes::findOrFail($template_id);
        $subscriberMail->dispatchJob($templatedata);

        return redirect()->back()->with('message',$templatedata->name.' Job Dispatched Successfully');
    }


}
