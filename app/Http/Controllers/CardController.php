<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CardController extends Controller
{
    public function getCardsPage(){
    	$card_types = DB::table('card_types')
                        ->orderBy('id')
                        ->get();
        $cards = DB::table('cards')
                    ->get();
    	return view('pages.cards',[
    		'card_types' => $card_types,
            'cards' => $cards
    		]);
    }

    public function getCard($id){
    	$card = DB::table('cards')
    					->where('id', $id)
    					->first();
    	return view('pages.card',[
    		'card' => $card
    		]);
    }
}
