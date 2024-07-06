<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use App\Models\Sale;

class DailyReportService
{
    public function generateReport()
    {
        // Calcular vendas do dia
        $sales = Sale::whereDate('created_at', now())->get();
        $totalSales = $sales->sum('value_sale');
        $totalCommission = $sales->sum('commission');

        // Dados para enviar no email
        $data = [
            'totalSales' => $totalSales,
            'totalCommission' => $totalCommission,
        ];

        // Enviar email com o relatório
        Mail::send('emails.daily_report', $data, function ($message) {
            $message->subject('report sales daily');
            $message->to('danilolimasza@gmail.com'); // Substitua pelo seu email ou email desejado
        });
    }
}
