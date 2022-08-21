<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRolPermisionRequest;
use App\Http\Requests\UpdateRolPermisionRequest;
use App\Models\RolPermision;

class RolPermisionController extends Controller
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
     * @param  \App\Http\Requests\StoreRolPermisionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRolPermisionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RolPermision  $rolPermision
     * @return \Illuminate\Http\Response
     */
    public function show(RolPermision $rolPermision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RolPermision  $rolPermision
     * @return \Illuminate\Http\Response
     */
    public function edit(RolPermision $rolPermision)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRolPermisionRequest  $request
     * @param  \App\Models\RolPermision  $rolPermision
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRolPermisionRequest $request, RolPermision $rolPermision)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RolPermision  $rolPermision
     * @return \Illuminate\Http\Response
     */
    public function destroy(RolPermision $rolPermision)
    {
        //
    }
}
