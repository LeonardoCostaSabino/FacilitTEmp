<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Cliente;

class Seguros extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('Proposta@gmail.com', 'Corretor')
            ->view('pages.welcome')
            ->with([
                'nome' => $this->cliente->nome,
                'idade' => $this->cliente->idade,
                'idade_aposentado' => $this->cliente->idade_aponsentado,
                'contribuicao_mensal' => $this->cliente->contribuicao_mensal,
            ]);
    }
}
