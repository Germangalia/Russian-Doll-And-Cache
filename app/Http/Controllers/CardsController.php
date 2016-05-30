<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Support\Facades\Cache;

class CardsController extends Controller
{
    public function index()
    {
        $cards = Cache::rememberForever(
            'cards', function(){
            return Card::with('notes')->get();
        });

        return view('cards.index', compact('cards'));
    }
}
