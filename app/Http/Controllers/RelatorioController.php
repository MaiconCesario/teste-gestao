<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use App\Mail\RelatorioVendas;
use App\Models\Venda;
use Carbon\Carbon;

class RelatorioController extends Controller
{
    public function gerarRelatorioVendasDoDia()
        {
            // Obtenha todas as vendas realizadas hoje
            $dataHoje = Carbon::now()->format('Y-m-d');
            $vendasDoDia = Venda::whereDate('data_venda', $dataHoje)->get();

            // Gere o relatório com base nas vendas do dia
            // Você pode usar uma biblioteca de relatórios ou criar um HTML personalizado

            // Envie o relatório por email
            Mail::to('testesuportemw@outolook.com')->send(new RelatorioVendas($vendasDoDia));

            return "Relatório de vendas do dia enviado com sucesso!";
        }


    
}
