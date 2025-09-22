<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index()
    {
        return view('campaigns.index',['campaigns'=>Campaign::latest()->get()]);
    }
    public function create()
    {
        return view("campaigns.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            "subject"=>"required",
            "email_body"=>"required",
            "phishing_link"=>"required|url",
        ]);
        $data = [
            "subject"=>$request->subject,
            "email_body"=>$request->email_body,
            "phishing_link"=>$request->phishing_link,
        ];
        Campaign::create($data);
        return redirect()->route('campaigns.index')->with('Success','Campaign Created');
    }
}