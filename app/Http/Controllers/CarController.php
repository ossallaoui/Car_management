<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
	public function create(Request $request)
	{
		$make=$request['make'];
		$model=$request['model'];
		$produced_on=$request['produced_on'];

		$car=new Car();

		$car->make=$make;
		$car->model=$model;
		$car->produced_on=$produced_on;

		$car->save();

		return redirect()->back();
	}


	public function index()
	{
		$cars=Car::all();

		return view('index', ['cars'=>$cars]);
	}
//redirect us to the edit page
	public function edit($car_id)
	{
		$car = Car::findOrFail($car_id);

		return view('edit',[
			"car" => $car
		]);
	}
// a method updates the car information

	public function update($car_id)
{
	$car = Car::findOrFail($car_id);

	$car->make = request()->input("make");
	$car->model = request()->input("model");
	$car->produced_on = request()->input("produced_on");
	$car->update();

	return redirect()->route("cars.index");
}


// a method delete the car information
public function destroy($car_id)
{
	car::destroy($car_id);
	return redirect()->route("cars.index");

	# code...
}
}

