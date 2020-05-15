<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{

	//method shows all cars 

		public function index()
	{
		//here we can set what user chose instead of 5
		//we already have perPage as a parametre or request attribute
		$cars=Car::paginate(Request('perPage', 5));

		return view('index', ['cars'=>$cars]);
	}
	//a method redirect us to the create page

		public function create()
		{
			return view('create');
		}
	//a method that store a new car 
	public function store(Request $request)
	{
		//dd($request->all()); //just to show what in $request->all()

		Car::create($request->all());
		/* another way t add new car
		$make=$request['make'];
		$model=$request['model'];
		$produced_on=$request['produced_on'];

		$car=new Car();

		$car->make=$make;
		$car->model=$model;
		$car->produced_on=$produced_on;

		$car->save();
		*/
		return redirect()->back();
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

