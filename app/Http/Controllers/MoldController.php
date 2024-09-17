<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Mold;
use Illuminate\Http\Request;

class MoldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mold::with('Brand')->get();

        return view('mold.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = Brand::all();
        return view('mold.create', compact('brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mold = new Mold();

        if(isset($mold)){
            $mold->name = $request->name;
            $mold->brand_id = $request->brand_id;
            $mold->save();

            return redirect()->route('mold.index');
        }

        return 'ERRO';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mold = Mold::find($id);

        if(isset($mold)) return view('mold.show', compact('mold'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mold = Mold::find($id);
        $brand = Brand::all();

        if(isset($mold)) return view('mold.edit', compact('mold', 'brand'));

        return "ERRO";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mold = Mold::find($id);

        if (isset($mold)) {
            $mold->name = $request->name;
            $mold->brand_id = $request->brand_id;
            $mold->save();

            return redirect()->route('mold.index');
        }

        return "ERRO";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mold = Mold::find($id);

        if($mold->delete()) return redirect()->route('mold.index');

        return "ERRO";

    }
}
