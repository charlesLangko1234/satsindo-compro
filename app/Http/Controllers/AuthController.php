<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login', ['title' => 'Login']);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        $users = config('users.users'); // Gunakan file konfigurasi atau hardcode kredensial

        if (array_key_exists($credentials['username'], $users) &&
            $users[$credentials['username']] === $credentials['password']) {
            Session::put('logged_in', true);
            return redirect()->route('ourDemo');
        }

        return redirect()->route('login')->withErrors(['message' => 'Invalid credentials']);
    }

    public function logout()
    {
        Session::forget('logged_in');
        return redirect()->route('login');
    }

    public function showDemoPage()
    {
        if (!Session::has('logged_in') || !Session::get('logged_in')) {
            return redirect()->route('login');
        }

        // Tampilkan halaman yang dilindungi
        return view('ourDemo', ['title' => 'Our Demo']);
    }
}


