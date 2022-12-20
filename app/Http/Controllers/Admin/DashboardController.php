<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $countCheckout = Checkout::count();
        $countAdmin = User::where('role', 'admin')->orWhere('role', 'super-admin')->count();
        $countUser = User::where('role', 'user')->count();
        return view('admin.dashboard', [
            'countCheckout' => $countCheckout,
            'countAdmin' => $countAdmin,
            'countUser' => $countUser
        ]);
    }

    public function transactions() {
        $checkouts = Checkout::with('Camp')->get();
        return view('admin.transactions', [
            'checkouts' => $checkouts
        ]);

    }

    public function users() {
        $users = User::all();
        return view('admin.user', [
            'users' => $users
        ]);
    }
}
