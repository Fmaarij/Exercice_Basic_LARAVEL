<?php

namespace App\Http\Controllers;

// use App\Models\UserTable;

use App\Models\UserTable;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        // $members = UserTable::all();
        return view ('pages.contact');
    }

    public function store(Request $request){
        $store = new UserTable;
        $store->firstname= $request->firstname;
        $store->lastname= $request->lastname;
        $store->save();
        return view('/pages.contact',compact('store'))->with('success','Post Created');
    }

}
