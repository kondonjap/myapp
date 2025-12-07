<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GoalController extends Controller
{
    public function store(Request $request)
    {
        $goal = Goal::create([
            'title' => $request->title,
            'deadline' => $request->deadline,
            'note' => $request->note,
        ]);

        return response()->json($goal);
    }
}