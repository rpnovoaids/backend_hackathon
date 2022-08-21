<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\StoreSupplieRequest;
use App\Http\Requests\Order\UpdateSupplieRequest;
use App\Models\Order\Supplie;

class SupplieController extends Controller
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
     * @param  \App\Http\Requests\Order\StoreSupplieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSupplieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order\Supplie  $supplie
     * @return \Illuminate\Http\Response
     */
    public function show(Supplie $supplie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order\Supplie  $supplie
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplie $supplie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Order\UpdateSupplieRequest  $request
     * @param  \App\Models\Order\Supplie  $supplie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSupplieRequest $request, Supplie $supplie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order\Supplie  $supplie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplie $supplie)
    {
        //
    }
}
