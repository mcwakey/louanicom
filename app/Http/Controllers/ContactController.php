<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $msg = ContactMessage::create($data);

        // send a simple notification email to site admin (using MAIL_FROM_ADDRESS)
        try {
            Mail::raw("New contact message from {$data['name']} ({$data['email']}):\n\n{$data['message']}", function ($m) {
                $m->to(config('mail.from.address'))->subject('New Contact Message');
            });
        } catch (\Exception $e) {
            // ignore mail failures for now
        }

        return back()->with('success','Message sent.');
    }
}
