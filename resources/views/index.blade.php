@extends('layouts.app')

@section('title')
  Cars
@endsection
@section('content')
	<div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2>Cars</h2>
		<div class="btn-toolbar mb-2 mb-md-0">
			<a href="/cars/create" class="btn btn-sm btn-primary">Add New Car</a>
		</div>
	</div>

	<div class="table-responsive shadow rounded">	
				<table class="table table-sm table-striped table-hover">
					<tr>
						<th>#</th>
						<th>Make</th>
						<th>Model</th>
						<th>Produced On</th>
					</tr>
					@foreach($cars as $car)
					<tr>
						<td>{{++$loop->index}}</td>
						<td>{{$car->make}}</td>
						<td>{{$car->model}}</td>
						<td>{{$car->produced_on}}</td>
						<td class="text-center">
							<a href="{{route('cars.edit',["car"=>$car])}}" class="btn btn-sm btn-primary">Edit</a>
							<form class="ml-2 d-inline" action="{{route('cars.delete',["car"=>$car])}}" method="post">
								@method('delete')
								@csrf
								<button type="submit" class="btn btn-sm btn-danger">Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</table>
		<nav aria-label="Pagination" class="p-2 d-flex justify-content-between align-items-center">
			<p>  Showing {{$cars->firstItem()}} to {{$cars->lastItem()}} of {{$cars->total()}} entries
				<!--Showing {{$cars->count()}} of {{$cars->total()}}--></p>
			<ul class="pagination pagination-sm"> 
				<form class="form-inline mr-1" method="GET" action="" role=form>
					<div class="form-group">
						<label for="perPage">Item per page</label>
						<select name="perPage" id="perPage" class="form-control form-control-sm ml-1" onchange="this.form.submit()">
							<option value="5" @if($cars->perPage() == 5) selected @endif>5</option>
							<option value="10" @if($cars->perPage() == 10) selected @endif>10</option>
							<option value="15" @if($cars->perPage() == 15) selected @endif>15</option>
						</select>
					</div>
				</form>
			{{$cars->appends(['perPage' => $cars->perPage()])->links()}}

			</ul>
		</nav>
	</div>
	<!-- <div class="ml-1">
		{{$cars->links()}}
	</div>
	-->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
@endsection