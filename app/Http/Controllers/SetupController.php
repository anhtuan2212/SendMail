<?php

namespace App\Http\Controllers;

use App\Models\nguoinhan;
use Illuminate\Http\Request;

class SetupController extends Controller
{
    public function index()
    {
        $user_nhan = nguoinhan::all();
        return view('layout.pages.SetupMail',compact('user_nhan'));
    }
}