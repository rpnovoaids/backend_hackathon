<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\StoreBillingTypeRequest;
use App\Http\Requests\Order\UpdateBillingTypeRequest;
use App\Models\Order\BillingType;

class BillingTypeController extends Controller
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
     * @param  \App\Http\Requests\Order\StoreBillingTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBillingTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order\BillingType  $billingType
     * @return \Illuminate\Http\Response
     */
    public function show(BillingType $billingType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order\BillingType  $billingType
     * @return \Illuminate\Http\Response
     */
    public function edit(BillingType $billingType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Order\UpdateBillingTypeRequest  $request
     * @param  \App\Models\Order\BillingType  $billingType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBillingTypeRequest $request, BillingType $billingType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order\BillingType  $billingType
     * @return \Illuminate\Http\Response
     */
    public function destroy(BillingType $billingType)
    {
        //
    }
}
