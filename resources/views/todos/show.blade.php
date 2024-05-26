@extends('layouts.app')
@section('content')
<div class="row justify-content-center my-5">
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<h2 class="card-title">{{ $todo->name }}</h2>
						</div>
						<div class="card-body">
							<p>{{ $todo->details }}</p>
							<p>
								<a href="/todos/edit/{{ $todo->id }}" class="btn btn-primary">Edit</a>
								<a href="/todos/delete/{{ $todo->id }}" class="btn btn-danger">Delete</a>
							</p>
						</div>
					</div>
				</div>
			</div>
@endsection