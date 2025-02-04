<?php

namespace App\Http\Controllers;

use App\Charts\SalesChart;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    
    public function index() {
        $chart = new SalesChart();
        return view('admin.dashboard.dashboard', ['chart' => $chart]);
        // return view('admin.dashboard.dashboard');
    }

}
