<div class="backend-content">
@if (Session::has('success'))

	<div class="alert alert-success">
		<strong>Sukces:</strong> {{Session::get('success')}}
	</div>

@endif

@if (count($errors) > 0)
	<div class="alert alert-danger" role="alert">
		<strong>Błąd:</strong>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>	
	</div>
@endif
</div>