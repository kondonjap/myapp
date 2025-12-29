<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IdolMember;

class IdolMemberController extends Controller
{
    public function index()
    {
        return IdolMember::orderBy('name')->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'group_name' => 'nullable|string|max:255',
        ]);

        return IdolMember::create($data);
    }
}