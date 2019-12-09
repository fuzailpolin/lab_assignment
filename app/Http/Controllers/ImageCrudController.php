<?php

namespace App\Http\Controllers;

use App\imageCrud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.pictureUpload');
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
    public function store(Request $req)
    {
		$timage = new imageCrud();
		$timage->username = $req->session()->get('name');
        $timage->image_type = $req->selectbox;
		$timage->description = $req->description;
		
		/* if($req->hasFile('image')){
			echo "successful";
		}
		else{
			$file = $req->file('image');
			echo $file->getClientOriginalName();
		} */
		
        if($req->hasFile('image')){
            $file = $req->file('image');
			$filename= $file->getClientOriginalName();
			$file->move('upload', $file->getClientOriginalName());
			$timage->image = $filename;
			
        }else{
			//return $timage;
            echo "upload fail";
        }
		
		if($timage->save()){
            //return redirect()->route('home.index');
			return back();
        }else{
            //return redirect()->route('student.add');
			echo "Image store failed!";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\imageCrud  $imageCrud
     * @return \Illuminate\Http\Response
     */
    public function show(imageCrud $imageCrud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\imageCrud  $imageCrud
     * @return \Illuminate\Http\Response
     */
    public function edit(imageCrud $imageCrud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\imageCrud  $imageCrud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, imageCrud $imageCrud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\imageCrud  $imageCrud
     * @return \Illuminate\Http\Response
     */
    public function destroy(imageCrud $imageCrud)
    {
        //
    }
}
