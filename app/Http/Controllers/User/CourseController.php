<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if($user->role == 'user') {
            return view('user.course');
        } else {
            return redirect(route('welcome'));
        }
    }
}
