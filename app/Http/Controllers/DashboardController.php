<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $title =
            $request->query('title', 'Curso de Laravel en Platzi!!!!');
        return view('test', [
            'title' => $title
        ]);
    }
}
