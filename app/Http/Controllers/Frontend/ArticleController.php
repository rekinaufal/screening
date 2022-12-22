<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Query\Builder;
use App\Models\Events;
use App\Models\Article;
use DB;

class ArticleController
{
    public static $pageTitle = 'Mempelai';
    
    public function index ()
    {
        $ArticleIndex = DB::table('article')
                    ->orderByDesc('created_at',)
                    ->get();

        $Article = DB::table('article')
                    ->orderByDesc('created_at',)
                    ->limit(3)
                    ->get();

        $Events = DB::table('events')->first();

        return view ('frontend.articles', compact('ArticleIndex', 'Article', 'Events'));
    }

    public function indexEvent ()
    {
        $Article = DB::table('article')
                    ->orderByDesc('created_at',)
                    ->limit(3)
                    ->get();
        $Events = DB::table('events')->first();
        return view ('frontend.events', compact ('Events', 'Article'));
    }

    public function detail ($id)
    {
        $id = decrypt($id);
        $Article = DB::table('article')
                    ->orderByDesc('created_at',)
                    ->limit(3)
                    ->get();
        $ArticleDetail = DB::table('article')
                        ->where('id',$id)
                        ->first();
        $ArticleRecent = DB::table('article')
                        ->orderByDesc('created_at',)
                        ->limit(5)
                        ->get();
        $Events = DB::table('events')->first();
                        
        return view ('frontend.detailArticle', compact ('Article', 'ArticleDetail', 'ArticleRecent', 'Events'));
    }
}
