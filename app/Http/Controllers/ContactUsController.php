<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Message;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function sendMessage(ContactUsRequest $request)
    {
        $params = $request->all();
        Message::create($params);
        return redirect('/contact-us');
    }
}
