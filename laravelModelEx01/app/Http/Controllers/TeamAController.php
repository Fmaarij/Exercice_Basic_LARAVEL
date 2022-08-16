<?php

namespace App\Http\Controllers;

use App\Models\TeamA;
use Illuminate\Http\Request;

class TeamAController extends Controller
{
    public function index()
    {
        $name = 'Team A page: ';
        $teamA = TeamA::all();

        // dd($teamA[0]);

        return view('pages.teamA',compact('name','teamA'));
    }
}
