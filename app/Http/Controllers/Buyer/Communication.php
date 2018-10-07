<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Communication extends Controller
{
    // Communication
    public function customers()
    {
        return view('vendor.customers.customers');
    }

    // Message
    public function message()
    {
        return view('vendor.communication.message');
    }

    // Mailbox
    public function mailbox()
    {
        return view('vendor.mailbox.mailbox');
    }
    
    public function mail_compose()
    {
        return view('vendor.mailbox.mail_compose');
    }
    
    public function mail_detail()
    {
        return view('vendor.mailbox.mail_detail');
    }

}