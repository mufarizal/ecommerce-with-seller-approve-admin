<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
     public function dashboard()
    {
        $user = Auth::user();
        return view('seller.dashboard', compact('user'));
    }
}
