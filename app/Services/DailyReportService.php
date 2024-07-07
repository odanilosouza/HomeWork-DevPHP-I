<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use App\Models\Sale;

class DailyReportService
{
    public function generateReport()
    {
        $sales = Sale::whereDate('created_at', now())->get();
        $totalSales = $sales->sum('value_sale');
        $totalCommission = $sales->sum('commission');

        $data = [
            'totalSales' => $totalSales,
            'totalCommission' => $totalCommission,
        ];

        Mail::send('emails.daily_report', $data, function ($message) {
            $message->subject('report sales daily');
            $message->to('danilolimasza@gmail.com'); 
        });
    }
}
