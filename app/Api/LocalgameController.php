<?php

namespace App\Api;

use App\Http\Controllers\Controller;
use App\Models\Localgame;
use App\Http\Requests\StoreLocalgameRequest;
use App\Http\Requests\UpdateLocalgameRequest;
use Illuminate\Http\Request;
class LocalgameController extends Controller
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
     * @param  \App\Http\Requests\StoreLocalgameRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLocalgameRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Localgame  $localgame
     * @return \Illuminate\Http\Response
     */
    public function show(Localgame $localgame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Localgame  $localgame
     * @return \Illuminate\Http\Response
     */
    public function edit(Localgame $localgame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLocalgameRequest  $request
     * @param  \App\Models\Localgame  $localgame
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLocalgameRequest $request, Localgame $localgame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Localgame  $localgame
     * @return \Illuminate\Http\Response
     */
    public function destroy(Localgame $localgame)
    {
        //
    }

    public function initlocalgame(Request $request)
    {
        collect($request->games)->map(function($item){
            Localgame::create($item);
        });
        return $this->message('导入成功');
    }
}
