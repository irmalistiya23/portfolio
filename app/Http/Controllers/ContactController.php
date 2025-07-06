<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string',
            'email'   => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Simpan ke database
        ContactMessage::create($data);

        // Kirim ke email juga
        Mail::raw(
            "Name: {$data['name']}\nEmail: {$data['email']}\n\nSubject: {$data['subject']}\n\nMessage:\n{$data['message']}",
            function ($message) use ($data) {
                $message->to('irmalistiya23@gmail.com')
                        ->subject('New Message from Contact Form');
            }
        );

        return back()->with('success', 'Your message has been sent and saved!');
    }
}
