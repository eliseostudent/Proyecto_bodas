<?php

namespace App\Exports;

use App\Models\Evento;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class InvitadosExport implements FromView
{
    protected $invitados;

    public function __construct(Evento $evento)
    {
        $this->invitados = $evento->invitados;
    }
    public function view(): View
    {
        return view('exports.invitados_excel', [
            'invitados' => $this->invitados
        ]);
    }
}
