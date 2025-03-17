<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        if (session()->has('admin')) {
            return redirect()->route('admin.index');
        }
        
        return view('admin.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $admin = Admin::where('username', $credentials['username'])->first();

        if ($admin && Hash::check($credentials['password'], $admin->password)) {
            session(['admin' => $admin->id]); // Store admin session
            return redirect()->route('admin.index'); // Redirect to the new admin page
        }

        return back()->withErrors(['login' => 'Invalid credentials']);
    }

    // Logout
    public function logout()
    {
        session()->forget('admin');
        return redirect()->route('news.index');
    }
}

