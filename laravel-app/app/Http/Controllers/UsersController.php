<?php

namespace App\Http\Controllers;

use Input;
use Redirect;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    protected $rules = ['name'=>['required'], 'email'=>['required']];
    public function store(Request $request){
      $this->validate($request,$this->rules);
      $input = Input::all();
      User::create($input);
      return Redirect::route('users.index')->with('message','User Added');
    }
    public function index(){
      $users=User::all();
      return view('users/index', compact('users'));
    }
    public function create(){
      return view('users/create');
    }
    public function update(User $user, Request $request){
      $this->validate($request,$this->rules);
      $input =array_except(Input::all(),'_method');
      $user->update($input);
      return Redirect::route('users.show',$user->slug)->with('message','User Updated');
    }
    public function show(User $user){
      return view('users/show',compact('user'));
    }
    public function destroy(User $user){
      $user->delete();
      return Redirect::route('users.index')->with('message','User Deleted');
    }
    public function edit(User $user){
      return view('users/edit', compact('user'));
    }
}
