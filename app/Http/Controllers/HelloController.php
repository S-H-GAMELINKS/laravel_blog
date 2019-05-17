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

    public function hello_index($id='zero') {
        $data = ['msg' => 'This Message is given by HelloController', 'id' => $id];
        return view('hello.index', $data);
    }

    public function hello_query(Request $request) {
        $data = [
            'msg' => 'This Page is Query',
            'id' => $request->id
        ];

        return view('hello.query', $data);
    }

    public function form() {
        $data = [
            'msg' => ''
        ];

        return view('hello.form', $data);
    }

    public function post(Request $request) {
        $data = [
            'msg' => $request->msg
        ];

        return view('hello.form', $data);
    }

    public function for_foreach() {
        $data = [
            'msgs' => [1, 2, 3, 4, 5]
        ];

        return view('hello.for_foreach', $data);
    }
}
