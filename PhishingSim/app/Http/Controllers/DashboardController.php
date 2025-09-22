<?php

namespace App\Http\Controllers;

use App\Models\PhishingLogs;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard',
        ['logs'=>PhishingLogs::latest()->get()]);
    }
}