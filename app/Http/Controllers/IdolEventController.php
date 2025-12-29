<?php

namespace App\Http\Controllers;

use App\Models\IdolEvent;
use Illuminate\Http\Request;

class IdolEventController extends Controller
{
    public function index()
    {
        return IdolEvent::with('venue')
            ->orderByDesc('event_date')
            ->orderByDesc('id')
            ->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'event_name' => 'required|string|max:255',
            'event_date' => 'required|date',
            'venue_id' => 'required|exists:idol_venues,id',
            'ticket_cost' => 'nullable|integer|min:0',
            'drink_cost' => 'nullable|integer|min:0',
            'note' => 'nullable|string',
        ]);

        $data['ticket_cost'] = $data['ticket_cost'] ?? 0;
        $data['drink_cost']  = $data['drink_cost'] ?? 0;

        return IdolEvent::create($data)->load('venue');
    }

    public function show(string $id)
    {
        return IdolEvent::with('venue')->findOrFail($id);
    }
}

