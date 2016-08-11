<?php

namespace App\Http\Controllers;

use App\Word;

use App\Http\Requests;

//use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class WordsController extends Controller
{
    public function store(){
      return 'store';
    }
    public function index(){
      $words=Word::all();
      return view('index', compact('words'));
      //return view('index');
    }
    public function create(){
      return view('create');
    }
    public function update(){
      return 'update';
    }
    public function show(Word $word){
      return view('show',compact('word'));
    }
    public function destroy(){
      return 'destroy';
    }
    public function edit(){
      return 'edit';
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
