<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        return "HelloController#index!";
    }

    public function test($params) {
        return $params
    }
}
