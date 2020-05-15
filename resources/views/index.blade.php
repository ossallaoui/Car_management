<!DOCTYPE html>
<html>
<head>
	<title>CArs application</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<div class="jumbotron jumbotron-fluid bg-danger p-1">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1 class="display-1 text-white">Cars</h1>
						<p class="lead text-white">A web application that manage cars.. </p>
					</div>
					<div class="col-md-6">
						<img src="img/car.png" alt="car" width="600px">
					</div>
				</div>
			</div>
			
		</div>
		<div class="row">
			<div class="col-md-6">
				<form action="{{route('cars.create')}}" method="post">
					@csrf
					<div class="row form-group">
						<div class="col-md-12">
							<label for="">make:</label>
							<input type="text" name="make" class="form-control" required>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<label for="">model:</label>
							<input type="text" name="model" class="form-control" required>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<label for="">Produced On:</label>
							<input type="date" name="produced_on" class="form-control" required>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<button type="submit" class="btn btn-success w-50 form-right">Create</button>
						</div>
					</div>

				</form>
			</div>
			<div class="col-md-6">
				<table class="table table-striped table-hover">
					<tr>
						<th>Make</th>
						<th>Model</th>
						<th>Produced On</th>
					</tr>
					@foreach($cars as $car)
					<tr>
						<td>{{$car->make}}</td>
						<td>{{$car->model}}</td>
						<td>{{$car->produced_on}}</td>
						<td>
							<a href="{{route('cars.edit',["car"=>$car])}}" class="btn btn-sm btn-primary">Edit</a>
							<form class="d-inline" action="{{route('cars.delete',["car"=>$car])}}" method="post">
								@method('delete')
								@csrf
								<button type="submit" class="btn btn-sm btn-danger">Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
		<div ></div>
	</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
</body>
</html>