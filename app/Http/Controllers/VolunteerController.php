<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;

class VolunteerController extends Controller
{
    public function index()
    {
        $volunteers = Volunteer::all();

        return view('volunteers', compact('volunteers'));
    }
}
