<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Mempelai;
use App\Models\Pria;
use App\Models\Wanita;
use App\Models\TempatAcara;

class ArticleController
{
    public static $pageTitle = 'Mempelai';
    
    public function index ()
    {
        // $Mempelai = Mempelai::all();
        // $pageTitle = self::$pageTitle;
        return view ('frontend.articles');
    }

    public function detail ($id)
    {
        $id = decrypt($id);
        // $Mempelai = Mempelai::all();
        // $pageTitle = self::$pageTitle;
        return view ('frontend.detailArticle');
    }
}
