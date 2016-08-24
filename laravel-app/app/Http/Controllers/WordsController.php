<?php

namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Word;
use App\Http\Requests;
use Illuminate\Http\Request;

class WordsController extends Controller
{
    protected $rules = ['word'=>['required','min:3'], 'slug'=>['required']];
    public function store(Request $request){
      $this->validate($request,$this->rules);
      $input = Input::all();
      Word::create($input);
      return Redirect::route('words.index')->with('message','Word Added');
    }
    public function index(){
      $words=Word::all();
      return view('index', compact('words'));
    }
    public function create(){
      return view('create');
    }
    public function update(Word $word, Request $request){
      $this->validate($request,$this->rules);
      $input =array_except(Input::all(),'_method');

      /*$UpdateDetails = Word::where('wordid', '=',  $word->wordid)->first();
      $UpdateDetails->note = $request->get('note');
      $UpdateDetails->save();*/
      $word->update($input);
      return Redirect::route('words.show',$word->slug)->with('message','Word Updated');
    }
    public function show(Word $word){
      return view('show',compact('word'));
    }
    public function destroy(Word $word){
      $word->delete();
      return Redirect::route('words.index')->with('message','Word Deleted');
    }
    public function edit(Word $word){
      return view('edit', compact('word'));
    }
    public function contact(){
      //return 'Contact me - saithewebguy@gmail.com';
      return view('contact');
    }
    public function about(){
      //return 'Contact me - saithewebguy@gmail.com';
      return 'about';
    }
}
