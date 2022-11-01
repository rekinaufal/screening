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
        return view ('frontend.articles', compact('Article'));
    }

    public function indexEvent ()
    {
        // $Events = Events::all();
        // $pageTitle = self::$pageTitle;
        $Events = DB::table('events')->first();
        return view ('frontend.events', compact ('Events'));
    }

    public function detail ($id)
    {
        $id = decrypt($id);
        $Article = DB::table('article')
        ->where('id',$id)
        ->first();
        return view ('frontend.detailArticle', compact ('Article'));
    }
}
