<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Color;
use App\Models\Mold;
use App\Models\State;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Car::with('mold', 'color', 'state')->get();

        return view('car.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $color =  Color::all();
        $mold = Mold::all();
        $state = State::all();
        return view('car.create', compact('color', 'mold', 'state'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new Car();

        if(isset($car)){
            $car->plate = $request->plate;
            $car->color_id = $request->color_id;
            $car->state_id = $request->state_id;
            $car->mold_id = $request->mold_id;
            $car->save();

            return redirect()->route('car.index');
        }

        return "ERRO";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);

        if(isset($car)) return view('car.show', compact('car'));

        return "ERROR";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
        $color =  Color::all();
        $mold = Mold::all();
        $state = State::all();

        if(isset($car)) return view('car.edit', compact('car', 'color',  'mold', 'state'));

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
        $car = Car::find($request);

        if(isset($car)){
            $car->plate = $request->plate;
            $car->color_id = $request->color_id;
            $car->mold_id = $request->mold_id;
            $car->state_id = $request->state_id;

            $car->save();
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
        $car = Car::find($id);

        if($car->delete($id)) return redirect()->route('car.index');

        return "ERRO";
    }

}
