<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GoalController extends Controller
{

     // 一覧
    public function index()
    {
        return Goal::orderByDesc('id')->get();
    }

    // 詳細
    public function show(string $id)
    {
        return \App\Models\Goal::findOrFail($id);
    }

    // 登録
    public function store(Request $request)
    {
        $goal = Goal::create([
            'title' => $request->title,
            'deadline' => $request->deadline,
            'note' => $request->note,
        ]);

        return response()->json($goal);
    }

    // 削除
    public function destroy(string $id)
    {
        $goal = \App\Models\Goal::findOrFail($id);
        $goal->delete();

        return response()->json([
            'message' => 'deleted'
        ]);
    }
}