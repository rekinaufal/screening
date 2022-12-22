<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Article;
use Session;
// use App\Models\Mempelai;

use Illuminate\Support\Facades\Storage;
use DB;
use File;
use Illuminate\Support\Facades\Auth;

class ArticleBackendController extends Controller
{
    public static $pageTitle = 'About';
    
    public function index ()
    {
        $Article = Article::all();
        $pageTitle = "Article";
        return view ('articles.index', compact('pageTitle', 'Article'));
    }

    public function create()
    {
        $Categories = DB::table('categories')->get();
        $pageTitle = self::$pageTitle;
        return view('articles.create', compact('pageTitle', 'Categories'));
    }

    public function store(Request $request)
    {
        if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }

        if(!empty($_FILES['image']['name'])) {
            $request->hasFile('image');
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file_name = Str::random(30) . '_' . $name;
            $file->move(base_path() . '/public/assets/image/screening-indonesia/article/backend', $file_name);
            $Article = Article::create([
                'id_categories' => $request->id_categories,
                'image' => '/assets/image/screening-indonesia/article/backend/' . $file_name,
                'title' => $request->title,
                'description' => $request->description,
                'status' => 1,
                'created_by' =>  Auth::user()->id,
            ]);
        }else{
            $Article = Article::create([
                'id_categories' => $request->id_categories,
                'title' => $request->title,
                'description' => $request->description,
                'status' => 1,
                'created_by' =>  Auth::user()->id,
            ]);
        }
     

        return redirect()->route('articles.index')
            ->with('success', 'Article created successfully.');
    }

    public function show ($id)
    {
        $About = About::find($id);
        $pageTitle = self::$pageTitle;

        return view ('about.show', compact('pageTitle', 'About'));
    }

    public function edit($id)
    {
        $Article = Article::find($id);
        $Categories = DB::table('categories')->get();
        $pageTitle = self::$pageTitle;
        // $pageBreadcrumbs = self::$pageBreadcrumbs;
        // $pageBreadcrumbs[] = [
        //     'page' => '/application/memoItemIns/'.$id.'/edit',
        //     'title' => 'Update '.self::$pageTitle,
        // ];

        return view('articles.edit', compact('Article', 'pageTitle', 'Categories'));
    }

    public function update(Request $request, $id)
    { 
        if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
           Session::flash('message', 'Session Expired, Please Login Again!'); 
           Session::flash('alert-class', 'alert-danger'); 
           return redirect('/login');
        }

        if($request->hasFile('image')){
	        File::delete(base_path() . '/public' . $request->input('imageold')); //hapus foto old

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file_name = Str::random(30) . '_' . $name;
            $file->move(base_path() . '/public/assets/image/screening-indonesia/article/backend', $file_name);
            
            $fieldUpdate = [
                'title'         => $request->input('title'),
                'image'         => '/assets/image/screening-indonesia/article/backend/' . $file_name,
                'description'   => $request->input('description'),
                'updated_by'    => Auth::user()->id,
            ];
        }else{
            $fieldUpdate = [
            'title'         => $request->input('title'),
            'description'   => $request->input('description'),
            'updated_by'    => Auth::user()->id,
            ];
        }
      
        $update = DB::table('article')->where('id', $id)->update($fieldUpdate);

        return redirect()->route('articles.index')
            ->with('success', self::$pageTitle.' updated successfully');
    }

    public function destroy(Request $request, $id)
    {
        // delete file foto  
        $gambarold = Article::find($id);
        File::delete(base_path() . '/public' . $gambarold->image); //hapus foto old

        $Article = Article::find($id)->delete();

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => self::$pageTitle.' deleted successfully'
            ], 200);
        }

        return redirect()->route('articles.index')
            ->with('success', self::$pageTitle.' deleted successfully');
    }
}
