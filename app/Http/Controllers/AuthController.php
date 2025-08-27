<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

public function register(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|confirmed',
            'role'=>'required|in:user,seller'
        ]);

        $status = $request->role === 'seller' ? 'pending' : 'approved';

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role'=>$request->role,
            'status'=>$status,
            'store_name'=>$request->store_name ?? null,
            'product_type'=>$request->product_type ?? null,
            'store_address'=>$request->store_address ?? null,
            'phone_number'=>$request->phone_number ?? null,
        ]);

        return redirect()->route('login')
            ->with('message', $request->role === 'seller'
                ? 'Terimakasih, admin akan segera approve akun Anda.'
                : 'Registrasi Berhasil, silahkan login!');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user){
            return back()->withErrors([ 'email'=>'Daftar dulu sebelum login.'])->withInput();
        }

        if($user->status === 'pending'){
            return back()->withErrors([ 'email'=>'Akun Anda menunggu approval admin.'])->withInput();
        }

        if(Auth::attempt($request->only('email','password'), $request->boolean('remember'))){
            $request->session()->regenerate();
            return match($user->role) {
                'admin' => redirect()->route('admin.dashboard'),
                'seller' => redirect()->route('seller.dashboard'),
                'user' => redirect()->route('user.dashboard'),
                default => abort(403),
            };
        }

        return back()->withErrors(['email'=>'Email / Password salah'])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }


}
