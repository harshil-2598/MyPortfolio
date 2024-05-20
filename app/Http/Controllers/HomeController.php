<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Eduction;
use App\Models\Experience;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::find(1);
        $about = AboutUs::find(1);
        $experience = Experience::where('user_id',$user->id)->get();
        $eduction = Eduction::where('user_id',$user->id)->get();
        return view('welcome',compact('about','user','experience','eduction'));
    }

    public function contactus(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ],[
            'name.required' => 'Please enter your name.',
            'email.required' => 'Please enter your email.',
            'subject.required' => 'Please enter your subject.',
            'message.required' => 'Please enter your message.',
        ]);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ],[
            'name.required' => 'Please enter your name.',
            'email.required' => 'Please enter your email.',
            'subject.required' => 'Please enter your subject.',
            'message.required' => 'Please enter your message.',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'msg' => $request->message,
        ];

        $mail = Mail::send('emailTemplate', $data, function($message) {
            $message->to('harshilkachhia43@gmail.com')
                ->subject('Email from my portfolio website');
        });

        if($mail){
            return redirect('/#contact')->with('success','Mail Sent');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
