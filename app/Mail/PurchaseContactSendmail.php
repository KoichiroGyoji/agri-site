<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PurchaseContactSendmail extends Mailable
{
    use Queueable, SerializesModels;
    
    private $email;
    private $goods;
    private $price;
    private $quantity;
    private $contact;
    private $sumprice;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        $this->email = $contact['email'];
        $this->goods = $contact['goods'];
        $this->price = $contact['price'];
        $this->quantity = $contact['quantity'];
        $this->contact = $contact['contact'];
        $this->sumprice = $contact['sumprice'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
     
    //メールを作るメソッド
    public function build()
    {
        return $this
        ->from($this->email)
        ->subject('自動送信メール')
        ->view('contact.purchaseMail')
        ->with([
            'email' => $this->email,
            'goods' => $this->goods,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'contact' => $this->contact,
            'sumprice' => $this->sumprice
        ]);
    }
}