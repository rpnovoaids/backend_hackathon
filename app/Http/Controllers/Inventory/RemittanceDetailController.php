<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\StoreRemittanceDetailRequest;
use App\Http\Requests\Inventory\UpdateRemittanceDetailRequest;
use App\Models\Inventory\RemittanceDetail;

class RemittanceDetailController extends Controller
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
     * @param  \App\Http\Requests\Inventory\StoreRemittanceDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRemittanceDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventory\RemittanceDetail  $remittanceDetail
     * @return \Illuminate\Http\Response
     */
    public function show(RemittanceDetail $remittanceDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventory\RemittanceDetail  $remittanceDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(RemittanceDetail $remittanceDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Inventory\UpdateRemittanceDetailRequest  $request
     * @param  \App\Models\Inventory\RemittanceDetail  $remittanceDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRemittanceDetailRequest $request, RemittanceDetail $remittanceDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventory\RemittanceDetail  $remittanceDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(RemittanceDetail $remittanceDetail)
    {
        //
    }
}
