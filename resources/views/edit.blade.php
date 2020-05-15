<!DOCTYPE html>
<html>
<head>
	<title>CArs application</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

	<div class="container mt-3">
		<div class="row">
			<div class="col-md-12">
				<form action="{{route("cars.update",["car"=>$car])}}" method="post">
					@csrf
					<div class="row form-group">
						<div class="col-md-12">
							<label for="">make:</label>
							<input type="text" name="make" class="form-control" value="{{$car->make}}">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<label for="">model:</label>
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
			</div>
	</div>
</body>
</html>