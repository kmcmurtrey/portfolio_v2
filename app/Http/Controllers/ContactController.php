<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactMeRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Email the contact request
     *
     * @param ContactMeRequest $request
     * @return Redirect
     */
    public function sendContactInfo(ContactMeRequest $request) {
        $data = $request->only('name', 'email');
        $data['messageLines'] = explode("\n", $request->get('message'));

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->subject('Blog Contact Form: '.$data['name'])
                    ->to(config('mail.from.address'))
                    ->replyTo($data['email']);
        });

        return back()
            ->withSuccess("Thank you for your message. It has been sent.");
    }
}
