<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function home() {
        return view('home');
    }

    public function admin() {
        // $admin = User::all()->where('role_id', 1);
        $roles = Role::all();
        $avatars = Avatar::all()->slice(1);
        return view('admin/dashboard', compact('avatars', 'roles'));
    }
}
