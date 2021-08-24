<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->menu = new menu;
    }
    public function home()
    {
        return view('home');
    }
    public function menu()
    {
        $data = [
            'menus' => $this->menu->SelectData(),
        ];
        return view('menu', $data);
    }
}
