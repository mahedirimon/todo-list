@extends('layouts.app')


@section('title','Todo Home')

@section('content')
			<div class="row justify-content-center my-5">
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<h2 class="card-title">All Todos</h2>
						</div>
						<div class="card-body">
							<ul class="list-group">
								@foreach($todos as $todo)
								<li class="list-group-item">{{ $todo->name }} <a href="/todos/{{ $todo->id }}" class="btn btn-info btn-sm float-end">View</a>

								@if(!$todo->completed)
								<a href="/todos/complete/{{ $todo->id }}" class="btn btn-warning btn-sm float-end">Complete</a>
								@endif
								</li>
								@endforeach
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
@endsection