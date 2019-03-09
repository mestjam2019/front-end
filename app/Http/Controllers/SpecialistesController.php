<?php

namespace App\Http\Controllers;

use App\Specialiste;
use Illuminate\Http\Request;

class SpecialistesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Specialiste::latest()->paginate(6);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $specialiste = new Specialiste();
        $specialiste->firstname = $request->firstname;
        $specialiste->lastname = $request->lastname;
        $specialiste->title = $request->title;
        $specialiste->address = $request->address;
        $specialiste->email = $request->email;
        $specialiste->contact = $request->contact;
        $specialiste->image = $request->image;
        $specialiste->save();

        return $specialiste;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Specialiste  $specialiste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $specialiste = Specialiste::findOrFail($id);
        $specialiste->firstname = $request->firstname;
        $specialiste->lastname = $request->lastname;
        $specialiste->title = $request->title;
        $specialiste->address = $request->address;
        $specialiste->email = $request->email;
        $specialiste->contact = $request->contact;
        $specialiste->image = $request->image;
        $specialiste->update();

        return $specialiste;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Specialiste  $specialiste
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $specialiste = Specialiste::findOrFail($id);
        $specialiste->delete();

        return 204;
    }
}
