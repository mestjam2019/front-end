<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\BookModel;
use Auth;

class BookController extends Controller
{
  public function store(Request $request){
    $this->validate($request, [
      'date' => 'required',
      'radio_time' => 'required'
    ]);
    // dd($request['radio_time']);
    // exit;
    $book = new BookModel();
    $book->date_booking = $request['date'];
    $book->time = $request['radio_time'];
    $book->user_id = Auth::user()->id;
    $book->statut = 0;
    $book->specialiste_id=1;
    $book->save();
    return redirect('confirm');
  }
}
