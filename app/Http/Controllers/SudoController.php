<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \App\Question;

class SudoController extends Controller
{
    public function getDashboard(){
    	$questions = new Question;
    	$questions_count = $questions->count();
    	return view('sudo.pages.dashboard',[
    		'questions_count' => $questions_count
    		]);
    }
    public function getArticlesPage(){
    	$articles = DB::table('articles')
    				  ->get();	
    	return view('sudo.pages.articles',[
    		'articles' => $articles
    		]);
    }
}
