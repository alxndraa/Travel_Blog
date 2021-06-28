<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    //Display all articles for a specific user
    public function index($id)
    {
        //all() eloquent function to retrieve all articles for a specific user
        $user = User::find($id);
        $articles = $user->articles;
        return view('article.index', ['articles' => $articles]);
    }

    //Show the form to create new article
    public function create()
    {
        $categories = Category::all();
        return view('article.create', ['categories' => $categories]);
    }

    //Store newly created article in storage
    public function store(Request $request)
    {
        $id = Auth::user()->id;

        //validate user input
        $request->validate([
            'title' => ['required', 'string', 'min:10', 'max:255'],
            'category' => ['required', 'exists:App\category,id'],
            'image' => ['required', 'mimes:jpeg, jpg, png', 'max:2000'],
            'story' => ['required', 'min:100']
        ]);

        //store image and get its path
        $image = $request->file('image');
        $imagePath = Storage::disk('public')->put('images', $image);

        //create a new article instance with the inputted values
        $article = new Article([
            'user_id' => $id,
            'category_id' => $request['category'],
            'title' => $request['title'],
            'description' => $request['story'],
            'image' => $imagePath
        ]);
        $article->save(); //save to database

        //redirect to blog page with a notification
        return $this->index($id)->with([
            Session::put('message', "<b>" . $article->title . "</b> has been successfully created")
        ]);
    }

    //Display certain article
    public function show(Article $article)
    {
        return view('article.show', ['article' => $article]);
    }

    //Show the form to edit a specific article
    public function edit(Article $article)
    {
        //
    }

    //Update the article's value in storage
    public function update(Request $request, Article $article)
    {
        //
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

        return $this->index($id)->with([
            Session::put('message', "<b>" . $oldTitle . "</b> has been successfully deleted")
        ]);
    }
}
