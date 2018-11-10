<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discovery;
use Auth;
use DB;

class DiscoveriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discoveries = discovery::all();
        return view('dashboard/discovery', compact('discoveries', 'productCount'));
        
    }
    
    public function home(){
        $home_w['art of the week'] = DB::table('discoveries')->where('sub_category', 'art of the week')->get();
        // $feature_art = discovery::all();
        return view('welcome', compact('home_w'));
    }

    // Featured Art
    public function feature_art(){
        $feature_art['Feature Art'] = DB::table('discoveries')->where('sub_category', 'Feature Art')->get();
        // $feature_art = discovery::all();
        return view('discover/featured_art', compact('feature_art'));
    }

    // art of the week
    public function week(){
        // $weeks['art of the week'] = DB::table('discoveries')->select('name','sub_category','price','images')->get();
        $weeks['art of the week'] = DB::table('discoveries')->where('sub_category', 'art of the week')->get();
        return view('discover/art_of_week', compact('weeks'));
    }

    // gift
    public function gift(){
        $gifts['gift'] = DB::table('discoveries')->where('sub_category', 'gift')->get();
        return view('discover/gift', compact('gifts'));
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
            $path = $request->file('artImage')->move(public_path('images/discovery'), $fileNameToStore);
        } else {
            $fileNameToStore = 'default.png';
        }
        $discovery = new Discovery;

        // $add_art->user_id = Auth::id();
        $discovery->name = $request->get('name');
        $discovery->sub_category = $request->get('sub_category');
        $discovery->description=$request->get('desc');
        $discovery->price =$request->get('price');
        $discovery->images =$request->get('images');
        $discovery->images = $fileNameToStore;
        $discovery->save();

        return redirect('discovery')->with('success','New Piece Added');
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
        $discovery =  Discovery::find($id);
        $discovery->delete();
        return redirect('discovery')->with('success', 'Information has been  deleted');

    }
}
