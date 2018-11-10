<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use Auth;
use DB;
class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = artist::all();
        return view('dashboard/artist', compact('artists', 'artistCount'));
        // return view('dashboard/artist');
    }

    // Artist Page
    public function artist(){
        $artist_page = DB::table('artists')->get();
        // $gifts['gift'] = DB::table('discoveries')->where('sub_category', 'gift')->get();
        return view('artist', compact('artist_page'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('artImage')) {
            $filenameWithExt = $request->file('artImage')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('artImage')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('artImage')->move(public_path('images/artist'), $fileNameToStore);
        } else {
            $fileNameToStore = 'default.png';
        }
        $artist = new Artist;

        // $add_art->user_id = Auth::id();
        $artist->name = $request->get('name');
        $artist->sub_category = $request->get('sub_category');
        $artist->description=$request->get('desc');
        $artist->price =$request->get('price');
        $artist->images =$request->get('images');
        $artist->images = $fileNameToStore;
        $artist->save();

        return redirect('artist')->with('success','New Piece Added');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artist = new Artist;
        $artist->delete();
        return redirect('artist')->with('success', 'Information has been  deleted');
    }
}
