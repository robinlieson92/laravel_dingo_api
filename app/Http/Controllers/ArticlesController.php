<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $articles = Article::all();
        if($request->get('search')){
            $articles = Article::where("title", "ILIKE", "%{$request->get('search')}%")
              ->orderBy('updated_at','desc')->paginate(5);
        }
        else {
		        $articles = Article::orderBy('updated_at','desc')->paginate(5);
        }
        return response()->json($articles);
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
      $articles = Article::create($request->all());
      return response()->json($articles);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $articles = Article::find($id);
      return response()->json($articles);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $articles = Article::find($id);
      return response()->json($articles);
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
      //$articles = Article::find($id)->update($request->all());
      Article::where("id", $id)
        ->update([
          "title" => $request->title,
          "content" => $request->content,
          "writer" => $request->writer
          ]);
      $articles = Article::find($id);
      return response()->json($articles);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $articles = Article::destroy($id);
      return response()->json($articles);
    }
}
