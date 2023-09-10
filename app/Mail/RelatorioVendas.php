<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RelatorioVendas extends Mailable
{
    use Queueable, SerializesModels;

    // Em app/Mail/RelatorioVendas.php
public function __construct($vendas)
{
    $this->vendas = $vendas;
}

public function build()
{
    return $this->view('emails.relatorio_vendas')
                ->with(['vendas' => $this->vendas])
                ->subject('Relatório de Vendas do Dia');
}


   
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Relatorio Vendas',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }


}
