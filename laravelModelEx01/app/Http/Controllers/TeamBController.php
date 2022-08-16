<?php

namespace App\Http\Controllers;

use App\Models\TeamB;
use Illuminate\Http\Request;

class TeamBController extends Controller
{
    public function index() {
        $teamB =TeamB::all();
        return view('pages.teamB', compact('teamB'));
    }
}
