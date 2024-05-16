<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CamdidateDashboardController extends Controller
{
    function index() {
        return view('frontend.candidate-dashboard.dashboard');
    }
}
