<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Contracts\Mail\Mailer;

class ContactFormController extends Controller
{

    public function show()
    {
        return view('contact');
    }

    private Mailer $mailer;
 
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function __invoke(Request $request)
    {

        $this->mailer->send(
            'emails.test',
            ['content' => $request->input('message'), 'email' => $request->input('email')],
            function (Message $message) use ($request) {
                $message->to('test@test.ts');
                $message->subject($request->input('subject'));
            }
        );

        return redirect('/contact');
    }
}


