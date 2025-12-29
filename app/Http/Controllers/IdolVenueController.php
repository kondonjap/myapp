<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IdolVenue;

class IdolVenueController extends Controller
{
    public function index()
    {
        return IdolVenue::orderBy('name')->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'prefecture' => 'nullable|string|max:255',
        ]);

        return IdolVenue::create($data);
    }
}