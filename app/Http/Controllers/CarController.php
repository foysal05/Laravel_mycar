<?php

namespace App\Http\Controllers;

use App\Car;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'car_number'           => 'required|max:50',
            'brand'                     => 'required',
            'model'                     => 'required',
            'chassis'                    => 'required',
            'driver'                        => 'required',
            'status'                        => 'required',
            // 'price'             => 'required|numeric',
            // 'quantity'             => 'required|numeric',
        ]);
        $car=new Car;

        $car->number=$request->car_number;
        $car->brand=$request->brand;
        $car->model=$request->model;
        $car->chassis_no=$request->chassis;
        $car->driver=$request->driver;
        $car->status=$request->status;
         $car->save();

         $cars = Car::orderBy('id', 'desc')->get();
        return redirect()->route('car')->with('cars', $cars);


        
      //return view('users.pages.cars')->with('cars', $cars);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }
    public function update_url()
    {
       return redirect()->route('car_update');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $car = Car::find($id);
       return view('users.pages.new_car')->with('car', $car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'car_number'           => 'required|max:50',
            'brand'                     => 'required',
            'model'                     => 'required',
            'chassis'                    => 'required',
            'driver'                        => 'required',
            'status'                        => 'required',
        ]);
        $car=Car::find($id);

        $car->number=$request->car_number;
        $car->brand=$request->brand;
        $car->model=$request->model;
        $car->chassis_no=$request->chassis;
        $car->driver=$request->driver;
        $car->status=$request->status;
         $car->save();

         //$cars = Car::orderBy('id', 'desc')->get();
        return redirect()->route('car');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
    public function delete( $id)
    {
       $car=Car::find($id);
       if (! is_null($car)) {
          $car->delete();
          
       }
    //    $cars = Car::orderBy('id', 'desc')->get();
    //     return redirect()->route('car')->with('cars', $cars);
    session()->flash('car_delete_success','Car Deleted Successfully !!');
    return back();
    }
}
