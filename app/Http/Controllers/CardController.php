<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\User;
use Illuminate\Http\Request;

class CardController extends Controller
{

    public function index()
    {
        $cards = Card::paginate(10);
        
        $users = User::all();

        return view('cards.index', compact('cards', 'users'));
    }
    public function create()
    {
        $users = User::all();

        return view('cards.create', compact('users'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
            'user_id' => 'nullable|exists:users,id',
        ]);

        Card::create([
            'name' => $request->name,
            'status' => $request->status,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('cards.index');
    }

    public function activate(Card $card)
    {
        $card->update(['status' => 'active']);

        return redirect()->route('cards.index');
    }

    public function deactivate(Card $card)
    {
        $card->update(['status' => 'inactive']);

        return redirect()->route('cards.index');
    }

    public function assign(Request $request, Card $card)
    {
        $request->validate(['user_id' => 'required|exists:users,id']);

        $card->update(['user_id' => $request->user_id]);

        return redirect()->route('cards.index');
    }
}
