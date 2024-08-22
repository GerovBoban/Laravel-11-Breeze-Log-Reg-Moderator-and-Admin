<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        //
    }


    public function build()
    {
       return $this
       ->from('test@example.com')
       ->to('customer@mail.com')
       ->subject('Poštovani, šaljem Vam e-mail...')
       ->markdown('mail.order-email');
    //    ->view('mail.order-email'); Ovako radi... Da vidimo ovo iyan da li rfadi
    }

    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Order Email',
    //     );
    // }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         markdown: 'mail.order-email',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
    * @return array<int, \Illuminate\Mail\Mailables\Attachment>
    */
    // public function attachments(): array
    // {
    //     return [];
    // }
}
