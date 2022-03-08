<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use Illuminate\Http\Request;

class MainCategoryController extends Controller
{

    public function index()
    {
        return view('dashboard.main-category.index');
    }

    public function create()
    {
        return view('dashboard.main-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MainCategory  $mainCategory
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(MainCategory $mainCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MainCategory  $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(MainCategory $mainCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MainCategory  $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MainCategory $mainCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MainCategory  $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainCategory $mainCategory)
    {
        //
    }
}
