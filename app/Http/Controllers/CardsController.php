<?php

namespace App\Http\Controllers;

use App\Card;

class CardsController extends Controller
{
    public function index()
    {
        $cards = Card::with('notes')->get();

        return view('cards.index', compact('cards'));
    }
}
