<?php

namespace App\Http\Controllers;

use App\Card;

class CardsController extends Controller
{
    public function index()
    {
        $cards = Card::with('notes', 'notes.user')->all();

        return view('cards.index', compact('cards'));
    }
}
