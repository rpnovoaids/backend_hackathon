<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\StoreMeterHistoryRequest;
use App\Http\Requests\Order\UpdateMeterHistoryRequest;
use App\Models\Order\MeterHistory;

class MeterHistoryController extends Controller
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
     * @param  \App\Http\Requests\Order\StoreMeterHistoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMeterHistoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order\MeterHistory  $meterHistory
     * @return \Illuminate\Http\Response
     */
    public function show(MeterHistory $meterHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order\MeterHistory  $meterHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(MeterHistory $meterHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Order\UpdateMeterHistoryRequest  $request
     * @param  \App\Models\Order\MeterHistory  $meterHistory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMeterHistoryRequest $request, MeterHistory $meterHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order\MeterHistory  $meterHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MeterHistory $meterHistory)
    {
        //
    }
}
