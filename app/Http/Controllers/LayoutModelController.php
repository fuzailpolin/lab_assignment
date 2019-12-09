<?php

namespace App\Http\Controllers;

use App\layoutModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LayoutModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req, $lay)
    {
        //$layout = new layoutModel();
		//$layout->username = $req->session()->get('name');
        //$layout->layout = $lay;
		
		DB::table('layout')
            ->where('username', $req->session()->get('name'))
            ->update(['layout' => $lay]);
		//return redirect()->route('home.index');
		return back();
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
     * @param  \App\layoutModel  $layoutModel
     * @return \Illuminate\Http\Response
     */
    public function show(layoutModel $layoutModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\layoutModel  $layoutModel
     * @return \Illuminate\Http\Response
     */
    public function edit(layoutModel $layoutModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\layoutModel  $layoutModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, layoutModel $layoutModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\layoutModel  $layoutModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(layoutModel $layoutModel)
    {
        //
    }
}
