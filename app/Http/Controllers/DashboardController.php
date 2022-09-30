<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $data = [
            [
                'name' => 'laravel',
                'lang' => 'PHP'
            ],
            [
                'name' => 'react',
                'lang' => 'JavaScript'
            ],
            [
                'name' => 'vue',
                'lang' => 'JS'
            ],
            [
                'name' => 'Spring',
                'lang' => 'Java'
            ],
            [
                'name' => 'Node',
                'lang' => 'JavaScript'
            ],
        ];
        return view('dashboard', compact('data'));
    }
}
