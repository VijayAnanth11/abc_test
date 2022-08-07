<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $personal_access_tokens = Category::all();
        return view('index',['personal_access_tokens'=>$personal_access_tokens,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personal_access_tokens =Category::all();
        return view('index',['personal_access_tokens'=>$personal_access_tokens,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personal_access_token = new Category();
        $personal_access_token->name = $request->input('name') ;
        $personal_access_token->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personal_access_token = Category::find($id);
        $personal_access_tokens = Category::all();
        return view('index',['personal_access_tokens'=>$personal_access_tokens,'personal_access_token'=>$personal_access_token,'layout'=>'show']) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personal_access_token = Category::find($id);
        $personal_access_tokens =Category::all();
        return view('personal_access_token',['personal_access_tokens'=>$personal_access_tokens,'personal_access_token'=>$personal_access_token,'layout'=>'edit']) ;
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
        $personal_access_token = Category::find($id);
        $personal_access_token->code = $request->input('code') ;
        $personal_access_token->name = $request->input('name') ;
        $personal_access_token->fixedprice = $request->input('fixedprice') ;
        $personal_access_token->discountprice = $request->input('discountprice') ;
        $personal_access_token->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personal_access_token = Category::find($id);
        $personal_access_token->delete();
        return redirect('/');
    }
}
