<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Events;
use App\Models\Article;
use DB;

class ArticleController
{
    public static $pageTitle = 'Mempelai';
    
    public function index ()
    {
        $Article = Article::all();
        $Events = DB::table('events')->first();

        return view ('frontend.articles', compact('Article', 'Events'));
    }

    public function indexEvent ()
    {
        // $pageTitle = self::$pageTitle;
        $Article = DB::table('article')->limit(5)->get();
        $Events = DB::table('events')->first();
        return view ('frontend.events', compact ('Events', 'Article'));
    }

    public function detail ($id)
    {
        $id = decrypt($id);
        $Article = Article::all();
        $ArticleDetail = DB::table('article')
        ->where('id',$id)
        ->first();
        // dd($Article->image);
        return view ('frontend.detailArticle', compact ('Article', 'ArticleDetail'));
    }
}
