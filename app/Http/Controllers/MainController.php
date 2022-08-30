<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $departments = Department::with('users')
        ->select(['id', 'title'])
        ->get();

        return view('main', compact('departments'));
    }

}
