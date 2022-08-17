<?php

namespace App\Http\Controllers;

use App\Models\UserTable;
use Illuminate\Http\Request;

class UserTableController extends Controller
{
    public function display(){
        $members = UserTable::all();

        return view('pages.display',compact('members'));
    }
}
