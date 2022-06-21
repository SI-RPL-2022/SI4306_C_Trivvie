<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     dd(Auth::user());
    //     if (Auth::user()->name != 'ADMIN') {
    //         Auth::logout();
    //         return redirect('/login');
    //     }
    // }
    public function index(Request $request)
    {
        $chart_options = [
            'chart_title' => 'Destinasi berdasarkan Wilayah',
            'report_type' => 'group_by_relationship',
            'model' => 'App\Models\Transaction',
            'group_by_field' => 'location',
            'group_by_period' => 'month',
            'relationship_name' => 'travel_package',
            'chart_type' => 'bar',
            'filter_field' => 'created_at',
            'filter_days' => 30, // show only last 30 days
        ];

        $chart1 = new LaravelChart($chart_options);

        $chart_options = [
            'chart_title' => 'Status Transaksi',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Transaction',
            'relationship_name' => 'travel_package',
            'group_by_field' => 'transaction_status',
            'chart_type' => 'pie',
            'filter_field' => 'created_at',
            'filter_period' => 'month', // show users only registered this month
            'chart_height' => 3000
        ];
        $chart2 = new LaravelChart($chart_options);

        $chart_options = [
            'chart_title' => 'Transaksi Customer',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Transaction',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
            'aggregate_function' => 'sum',
            'aggregate_field' => 'transaction_total',
            'chart_type' => 'line',
        ];

        $chart3 = new LaravelChart($chart_options);

        return view('pages.admin.dashboard', [
            'travel_package' => TravelPackage::count(),
            'chart1' => $chart1,
            'chart2' => $chart2,
            'chart3' => $chart3,
            'transaction' => Transaction::count(),
            'transaction_pending' => Transaction::where('transaction_status', 'PENDING')->count(),
            'transaction_success' => Transaction::where('transaction_status', 'SUCCESS')->count()
        ]);
    }
}
