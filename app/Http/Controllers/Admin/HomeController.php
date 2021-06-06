<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

class HomeController extends Controller
{
    public function index()
    {
        $data = Question::with('classifications', 'modelo');

        return view('admin.home', compact('data',));
    }


}