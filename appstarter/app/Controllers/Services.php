<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function index()
    {
        $data = [ 'title' => 'Services' ];
        return view('services/index', $data);
    }
}