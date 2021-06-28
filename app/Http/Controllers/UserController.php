<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function __construct()
    {
        //member can access anything except index and destroy
        $this->middleware('auth')->except(['index', 'destroy']);

        //admin can only access index and destroy
        $this->middleware('admin')->only(['index','destroy']);
    }

    //Display all users
    public function index()
    {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }

    //Show the form to edit a specific article
    public function edit(User $user)
    {
        return view('user.edit', ['user' => $user]);
    }

    //Update the article's value in storage
    public function update(Request $request, User $user)
    {
        //validate input
        $request->validate([
            'name' => ['required', 'string', 'min:5','max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$user->id],
            'phone' => ['required', 'between:10,12']
        ]);

        //update the user's values
        $user->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone']
        ]);
        $user->save();

        //if any changes where made,
        //redirect to profile page with success message
        if($user->getChanges()){
            return $this->edit($user)->with([
                Session::put('message', "Your profile has been successfully updated")
            ]);
        }
        else{
            return redirect()->back();
        }
    }

    //Remove or delete a user 
    public function destroy(User $user)
    {
        $oldName = $user->name;

        //delete article
        $user->delete();

        return $this->index()->with([
            Session::put('message', "<b>" . $oldName . "</b> has been successfully deleted")
        ]);
    }
}
