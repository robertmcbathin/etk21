<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class SiteController extends Controller
{
    public function getMainPage()
    {
        /**
         * DB queries
         * @var [type]
         */
    	$main_article = DB::table('articles')
    					->orderBy('created_at', 'desc')
    					->take(1)
    					->get();
    	$articles = DB::table('articles')
    					->orderBy('created_at', 'desc')
    					->skip(1)
    					->take(2)
    					->get();
        $card_types = DB::table('card_types')
                        ->orderBy('id')
                        ->get();
        $cards = DB::table('cards')
                    ->get();
        /**
         * 
         */
    	Carbon::setLocale('ru');
    	/**
    	 * Make a human-readable date
    	 */
    	foreach ($main_article as $article) {
    		$non_formatted_date = new Carbon($article->created_at);
    		$date = $non_formatted_date->diffForHumans();
    		$article->created_at = $date;
    	}
    	foreach ($articles as $article) {
    		$non_formatted_date = new Carbon($article->created_at);
    		$date = $non_formatted_date->diffForHumans();
    		$article->created_at = $date;
    	}
    	/**
    	 * 
    	 */
    	return view('index',[
    		'main_article' => $main_article,
    		'articles' => $articles,
            'card_types' => $card_types,
            'cards' => $cards
    		]);
    }

    public function getNewsPage(){
    	$articles = DB::table('articles')
    					->orderBy('created_at', 'desc')
    					->get();
    	Carbon::setLocale('ru');
    	/**
    	 * Make a human-readable date
    	 */
    	foreach ($articles as $article) {
    		$non_formatted_date = new Carbon($article->created_at);
    		$date = $non_formatted_date->format('j/m/Y');
    		$article->created_at = $date;
    	}
    	/**
    	 * 
    	 */
    	return view('pages.news',[
    		'articles' => $articles
    		]);
    }

    public function getArticle($id){
    	$article = DB::table('articles')
    					->where('id', $id)
    					->first();
    	Carbon::setLocale('ru');
    	$non_formatted_date = new Carbon($article->created_at);
    	$date = $non_formatted_date->format('j/m/Y');
    	$article->created_at = $date;
    	return view('pages.article',[
    		'article' => $article
    		]);
    }

    public function getContactsPage(){
        return view('pages.contacts');
    }

    public function getFaqPage(){
        $questions = DB::table('questions')
                       ->orderBy('updated_at')
                       ->get();
        return view('pages.faq',[
            'questions' => $questions
            ]);
    }
}
