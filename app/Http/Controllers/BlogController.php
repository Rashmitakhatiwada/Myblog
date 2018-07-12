<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat=\App\Model\Blog::all();

        return view('back.blogs.index', compact('cat'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $cat=\App\Model\Category::get();
       return view('back.blogs.create', compact('cat' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat=new \App\Model\Blog;
      $cat->id=$request-> get('id');
      $cat->users_id=$request-> get('users_id');
      $cat->category_id=$request-> get('categories_id');

      $cat->title=$request-> get('title');
      $cat->description=$request-> get('description');
      $cat->figure=$request-> get('figure');
      $cat->fullstory=$request-> get('fullstory');
      $cat->heading=$request-> get('heading');
      $cat->status=$request-> get('status');



      $cat->save();
      return redirect('blog')-> with('success','information has added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat= \App\Model\Blog::find($id);
        return view('back.blogs.show',compact('cat'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $cat= \App\Model\Blog::find($id);
        return view('back.blogs.edit',compact('cat','id'));
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
        $cat= \App\Model\Blog::find($id);
      $cat->users_id=$request->get('users_id');
      $cat->category_id=$request-> get('categories_id');

      $cat->title=$request-> get('title');
      $cat->description=$request-> get('description');
      $cat->figure=$request-> get('figure');
      $cat->fullstory=$request-> get('fullstory');
      $cat->heading=$request-> get('heading');
      $cat->status=$request-> get('status');

        $cat->save();
        return redirect('blog')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat = \App\Model\Blog::find($id);
        $cat->delete();
        return redirect('blog');     
          }
}
