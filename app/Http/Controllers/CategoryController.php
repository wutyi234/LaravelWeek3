<?php

namespace App\Http\Controllers;

use App\Category;
use App\Receipe;
use Illuminate\Http\Request;

class CategoryController extends Controller
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

        $data = Category::paginate(3);
    	return view('categoryhome', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $receipe = Receipe::all();
        return view('categorycreate', compact('receipe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $validatedData = request()->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Category::create($validatedData);

        return redirect("category")->with("message",'New Category has created succsessfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $this->authorize('view', $category);
        return view('categoryshow', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        $this->authorize('view', $category);
        $receipe = Receipe::all();
        return view('categoryedit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function update(Category $category)
    {
        //
        $this->authorize('view', $category);
        $validatedData = request()->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $category->update($validatedData);

        return redirect("category")->with("message",'Category has updated succsessfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $this->authorize('view', $category);
        $category->delete();

        return redirect("category")->with("message",'Category has deleted succsessfully!');
    }
}

