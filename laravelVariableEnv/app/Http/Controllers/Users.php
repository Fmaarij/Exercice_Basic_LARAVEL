<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index($name)
    {
        // echo 'welcome '.$name.' '; var_dump($name);
    // dd($name);
    // var_dump($name);

        return view("user", ['name' => $name]);

    }

}
