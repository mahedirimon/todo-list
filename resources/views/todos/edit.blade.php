@extends('layouts.app')
@section('title','Todo Edit')
@section('content')
<div class="row justify-content-center my-5">
	<div class="col-lg-6">
		<div class="card">
			@if($errors->any())
			<div class="alert alert-danger">
				<ul class="list-group">
					@foreach($errors->all() as $error )
					<li class="list-group-item">{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<div class="card-header">
				<h2 class="card-title">Edit Todo</h2>
			</div>
			<div class="card-body">
				<form action="/todos/update/{{$todo->id}} "method="POST">
					@csrf
					<div class="mb-3">
						<label>Name</label>
						<input type="text" name="name" class="form-control" placeholder="Input Todo Name" value="{{ $todo->name }}">
					</div>
					<div class="mb-3">
						<label>Details</label>
						<textarea name="details" class="form-control" rows="5" placeholder="Input Todo Details">{{ $todo->details}}</textarea>
					</div>
					<div class="mb-3 d-grid">
						<input type="submit" name="submit" class=" btn btn-success" value="Updated">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection