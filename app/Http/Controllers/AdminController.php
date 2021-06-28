<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    //Display all articles
    public function index(){
        $articles = Article::all()->groupBy('user_id');
        return view('article.indexAdmin', ['articles' => $articles]);
    }

    //Remove or delete specific article
    public function destroy(Article $article)
    {
        $oldTitle = $article->title;
        $id = $article->user_id;

        //Delete image from storage
        Storage::disk('public')->delete('$article->image');

        //delete article
        $article->delete();

        return $this->index()->with([
            Session::put('message', "<b>" . $oldTitle . "</b> has been successfully deleted")
        ]);
    }
}
