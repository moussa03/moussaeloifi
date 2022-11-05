<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Http\Requests\StoreSubscriberRequest;
use App\Http\Requests\UpdateSubscriberRequest;
use App\Notifications\subscriptionMail;
use Illuminate\Http\Request;
use Session;
use Response;
use Newsletter;

use Illuminate\Support\Facades\Redirect;


class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->ajax()){
            $validated = $request->validate([
                // 'name' => 'required',
                'email' => 'required|unique:subscribers|max:255',
                // 'message' => 'required',
            ]);
          
            $susbcriber=Subscriber::create([
                "name"=>$request->name,
                "email"=>$request->email,
                "message"=>$request->message
            ]);
           
        }
        $user = Subscriber::latest()->first(); //3 is the id of The Accountant role
        $delay = now()->addMinutes(10);
        $user->notify((new subscriptionMail()));

        //  \Notification::send($user, new subscriptionMail());
        //  Newsletter::subscribe($user);
        return response()->json(['success' => "vous etes maintenant abonné vous allez recevoir nos notifications"]);
        
    }
    public function add_to_news_letter(Request $request)
    {
        if($request->ajax()){
            $validated = $request->validate([
                // 'name' => 'required',
                'email' => 'required|unique:subscribers|max:255',
                // 'message' => 'required',
            ]);
            
            $susbcriber=Subscriber::create([
                // "name"=>$request->name,
                "email"=>$request->email,
                // "message"=>$request->message
            ]);
        }
        

        $user = Subscriber::latest()->first(); //3 is the id of The Accountant role
        // \Notification::send($user, new subscriptionMail());
        $user ->notify(new subscriptionMail());

        // Newsletter::subscribe($user);
        return response()->json(['success' => "vous etes maintenant abonné vous allez recevoir nos notifications"]);
        
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubscriberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubscriberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function show(Subscriber $subscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscriber $subscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubscriberRequest  $request
     * @param  \App\Models\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubscriberRequest $request, Subscriber $subscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscriber $subscriber)
    {
        //
    }
}
