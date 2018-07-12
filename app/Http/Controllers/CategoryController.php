<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= \App\Model\Category::latest('id')->get();

        return view('back.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.categories.Create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['name'=>'required|min:5|','description'=>'required']);
           $categories=new \App\Model\Category;
           $categories-> id=$request-> get('id');
      $categories-> name=$request-> get('name');

      $categories->save();
      return redirect('categories')-> with('success','information has added');
            }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $categories= \App\Model\Category::find($id);
        return view('back.categories.show',compact('categories'));  

            }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $categories= \App\Model\Category::find($id);
        return view('back.categories.edit',compact('categories'));    
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
        $categories= \App\Model\Category::find($id);
        $categories->name=$request->get('name');
        $categories->save();
        return redirect('category')->with('success');
            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = \App\Model\Category::find($id);
        $categories->delete();
        return redirect('category');
            }
}
