<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactsSendmail extends Mailable
{
    use Queueable, SerializesModels;

    // プロパティを定義
    private $company;
    private $name;
    private $tell;
    private $email;
    private $title;
    private $body;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $inputs )
    {
        // コンストラクタでプロパティに値を格納
        $this->company = $inputs['company'];
        $this->name = $inputs['name']; 
        $this->tell = $inputs['tell'];
        $this->email = $inputs['email'];
        $this->title = $inputs['title'];
        $this->body = $inputs['body'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // メールの設定
        return $this
                ->from('example@gmail.com')
                ->subject('自動送信メール')
                ->view('contact.mail')
                ->with([
                'company' => $this->company,    
                'name' => $this->name,    
                'tell' => $this->tell,    
                'email' => $this->email,
                'title' => $this->title,
                'body' => $this->body,
                ]);
    }
}
