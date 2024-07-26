<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $datas = User::with('designation', 'department')->get();
        return view('welcome', compact('datas'));
    }
    public function search(Request $request)
    {
        $datas = User::with('designation', 'department')->where(function ($datas) use ($request) {
            if (!empty($request->search)) {
                $searchTerm = "%{$request->search}%";
                $datas->orWhere('name', 'like', $searchTerm)
                    ->orWhereHas('designation', function ($query) use ($searchTerm) {
                        $query->where('name', 'like', $searchTerm);
                    })
                    ->orWhereHas('department', function ($query) use ($searchTerm) {
                        $query->where('name', 'like', $searchTerm);
                    });
            }
        })->get();
        return view('inner-list', compact('datas'));
    }
}
