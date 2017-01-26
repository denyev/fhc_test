<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customers;

class IndexController extends Controller
{
    public function index(){
      $data = [
        'title' => 'Тестовое задание',
        'customers' => Customers::all()
      ];
      return view('index', $data);
    }
}
