<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $totalUser = User::where('role','user')->count();
        $totalSeller = User::where('role','seller')->count();
        $pendingSeller = User::where('role','seller')->where('status','pending')->count();
        $pendingUsers = User::where('role','seller')->where('status','pending')->get();

        return view('admin.dashboard', compact('user','totalUser','totalSeller','pendingSeller','pendingUsers'));
    }

    public function approve($id)
    {
        $user = User::findOrFail($id);
        $user->status = 'approved';
        $user->save();

        return back()->with('message', "{$user->name} berhasil diapprove.");
    }
}

