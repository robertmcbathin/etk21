<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;
use Session;
use \App\Question;
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
                        ->where('published', '1')
    					->take(1)
    					->get();
    	$articles = DB::table('articles')
    					->orderBy('created_at', 'desc')
                        ->where('published', '1')
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
                       ->where('answer', '!=', '')
                       ->orderBy('updated_at')
                       ->get();
        return view('pages.faq',[
            'questions' => $questions
            ]);
    }
    public function getAskPage(){
        return view('pages.ask');
    }
    public function postQuestion(Request $request){
        $this->validate($request,[
            'name' => 'required|min:1|max:100',
            'email' => 'required|min:1|max:100',
            'content' => 'required|min:1'
            ]);
        $name = $request['name'];
        $email = $request['email'];
        $content = $request['content'];
        /**
         * INSERT INTO DB
         * @var Question
         */
        $question = new Question;
        $question->name = $name;
        $question->email = $email;
        $question->content = $content;
        if ($question->save())
        {
            Mail::send('emails.question',
                      ['name' => $name,
                       'email' => $email,
                       'content' => $content],
                       function ($m){
                $m->from('activation@etk-club.ru', 'ETK21.RU');
                $m->to('questions@etk21.ru')->subject('Новый вопрос с сайта');
                });
                Session::flash('ok', 'Ваше сообщение отправлено');
                return redirect()->back();
        }
    }
}
