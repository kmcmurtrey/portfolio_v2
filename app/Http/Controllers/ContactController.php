<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests\ContactMeRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Email the contact request
     *
     * @param ContactMeRequest $request
     * @return Redirect
     */
    public function sendContactInfo(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' =>'required',
            'email' =>'required|email',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::to(url::previous() . '#contact')
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->only('name', 'email');
        $data['messageLines'] = explode("\n", $request->get('message'));

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->subject('Blog Contact Form: '.$data['name'])
                    ->to(config('mail.from.address'))
                    ->replyTo($data['email']);
        });

        return Redirect::to(url::previous() . '#contact')
            ->with('message', 'Thank you for your message. It has been sent.');
    }
}
