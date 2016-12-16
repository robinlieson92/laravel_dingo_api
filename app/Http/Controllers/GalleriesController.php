<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use File;

class GalleriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      if($request->get('search')){
          $galleries = Gallery::where("title", "ILIKE", "%{$request->get('search')}%")
            ->orderBy('updated_at','desc')->paginate(5);
      }
      else {
          $galleries = Gallery::orderBy('updated_at','desc')->paginate(5);
      }
      return response()->json($galleries);
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
      //dd($request->all());
      $gallery = new Gallery;
      $galleries = Gallery::save_image($gallery,$request);
      // Session::flash("notice", "Gallery success created");
      return response()->json($galleries);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galleries = Gallery::find($id);
        return response()->json($galleries);
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
          $gallery = Gallery::find($id);
          //delete file
          Gallery::delete_files($gallery);

          //save image
          $galleries = Gallery::save_image($gallery,$request);
          // Session::flash("notice", "Gallery success updated");
          return response()->json($galleries);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $directory = public_path()."/upload_image/".$id;
      File::deleteDirectory($directory);
      $galleries = Gallery::destroy($id);
      // Session::flash("notice", "Gallery success deleted");
      return response()->json($galleries);
    }
}
