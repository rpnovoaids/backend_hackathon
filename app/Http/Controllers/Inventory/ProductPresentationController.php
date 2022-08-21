<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\StoreProductPresentationRequest;
use App\Http\Requests\Inventory\UpdateProductPresentationRequest;
use App\Models\Inventory\ProductPresentation;

class ProductPresentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Inventory\StoreProductPresentationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductPresentationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventory\ProductPresentation  $productPresentation
     * @return \Illuminate\Http\Response
     */
    public function show(ProductPresentation $productPresentation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventory\ProductPresentation  $productPresentation
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductPresentation $productPresentation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Inventory\UpdateProductPresentationRequest  $request
     * @param  \App\Models\Inventory\ProductPresentation  $productPresentation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductPresentationRequest $request, ProductPresentation $productPresentation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventory\ProductPresentation  $productPresentation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductPresentation $productPresentation)
    {
        //
    }
}
