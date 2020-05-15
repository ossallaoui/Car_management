@extends('layouts.app')
@section('title')
  Edit Cars
@endsection
@section('content')
<div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2>Edit Car</h2>
	</div>
		<form class="pt-3" action="{{route("cars.update",["car"=>$car])}}" method="post">
			@csrf
			<div class="row form-group">
				<div class="col-md-12">
					<label for="">Make:</label>
					<input type="text" name="make" class="form-control" value="{{$car->make}}">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-12">
					<label for="">Model:</label>
					<input type="text" name="model" class="form-control" value="{{$car->model}}">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-12">
					<label for="">Produced On:</label>
					<input type="date" name="produced_on" class="form-control" value="{{$car->produced_on}}">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-12">
					<button type="submit" class="btn btn-block btn-success">Update</button>
				</div>
			</div>

		</form>
@endsection