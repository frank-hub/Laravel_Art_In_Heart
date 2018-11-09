<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Add_Art;
use Auth;
class Add_Arts extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/add_art');
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
        $this->validate($request,[
            'name'=>'required',
            'category'=>'required',
            'sub_category'=>'required',
            'sub_category'=>'required',
            'desc'=>'required',
            'price'=>'required',
            'artImage'=>'required',
        ]);
        if ($request->hasFile('artImage')) {
            $filenameWithExt = $request->file('artImage')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('artImage')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('artImage')->storeAs('public/art', $fileNameToStore);
        } else {
            $fileNameToStore = 'default.png';
        }
        $add_art = new Add_Art;

        $add_art->user_id = Auth::id();
        $add_art->name = $request->get('name');
        $add_art->category = $request->get('category');
        $add_art->sub_category = $request->get('sub_category');
        $add_art->desc=$request->get('desc');
        $add_art->price =$request->get('price');
        $add_art->artImage =$request->get('images');
        $add_art->artImage = $fileNameToStore;
        $add_art->save();

        return redirect('dashboard/add_art')->with('success','New Piece Added');
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
        //
    }
}
