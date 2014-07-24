<?php

class CategoryController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        Return View::make("admin.category.index");
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        Return View::make("admin.category.add");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        Category::create(array(
            'tittle'           => Input::get("title"),
            'description'      => Input::get("description"),
        ));
        return "<h4 class='text-success'>Category Added Successful</h4>";
    }


    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function lists()
    {
        return View::make("admin.category.list");
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return View::make("admin.category.edit",compact("category"));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $category = Category::find($id);
        $category->tittle=Input::get("tittle");
        $category->description=Input::get("description");
        $category->save();
        return "<h4 class='text-success'>Category Updated Successful</h4>";
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

    }


}
