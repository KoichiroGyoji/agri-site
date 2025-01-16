<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\PurchaseContactFormRequest;
use App\Mail\PurchaseContactSendmail;
use App\Mail\ContactSendmail;

class ContactController extends Controller
{
    // 購入情報
    
    public function purchaseConfirm(PurchaseContactFormRequest $request)
    {
        $contact = $request->all();
        return view('agris.purchaseConfirm',compact('contact'));
    }
    
    public function PurchaseSend(PurchaseContactFormRequest $request)
    {
        $contact = $request->all();
        \Mail::to('koichiro.gyohji.1019@gmail.com')->send(new PurchaseContactSendmail($contact));
        $request->session()->regenerateToken();
        return view('agris.thanks');
    }
    
    public function index()
    {
        return view('agris.contact');
    }

    public function confirm(ContactFormRequest $request)
    {
        $contact = $request->all();
        return view('agris.confirm',compact('contact'));
    }

    public function send(ContactFormRequest $request)
    {
        $contact = $request->all();
        \Mail::to('koichiro.gyohji.1019@gmail.com')->send(new ContactSendmail($contact));
        $request->session()->regenerateToken();
        return view('agris.thanks');
    }
}

