<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        return "HelloController#index!";
    }

    public function test($params='none') {
        return $params;
    }

    public function hello_index($id = 'zero') {
        $data = ['msg' => 'This Message is given by HelloController', 'id' => $id];
        return view('hello.index', $data);
    }
}
