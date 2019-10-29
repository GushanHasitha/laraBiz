<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createlistings');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email'
        ]);

        $listing = new Listing;
        $listing->name = $request->input('name');
        $listing->user_id = auth()->user()->id;
        $listing->website = $request->input('website');
        $listing->email = $request->input('email');
        $listing->address = $request->input('address');
        $listing->phone = $request->input('phone');
        $listing->bio = $request->input('bio');

        $listing->save();

        return redirect('/dashboard')->with('success', 'Listing added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing = Listing::find($id);
        return view('editlisting')->with('listing', $listing);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email'
        ]);

        $listing = Listing::find($id);
        $listing->name = $request->input('name');
        $listing->user_id = auth()->user()->id;
        $listing->website = $request->input('website');
        $listing->email = $request->input('email');
        $listing->address = $request->input('address');
        $listing->phone = $request->input('phone');
        $listing->bio = $request->input('bio');

        $listing->save();

        return redirect('/dashboard')->with('success', 'Listing updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing = Listing::find($id);
        $listing->delete();

        return redirect('/dashboard')->with('success', 'Listing deleted successfully');
    }
}
