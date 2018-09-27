@if (Session::has('success'))  

	<div class="alert alert-success alert-dismissible">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
                    <p><strong>Success:</strong> {{ Session::get('success') }}</p>
                </div>

@endif

@if (Session::has('info'))  

	<div class="alert alert-info alert-dismissible">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
                    <p><strong>Info:</strong> {{ Session::get('info') }}</p>
                </div>

@endif

@if (count($errors)>0)
 <div class="alert alert-danger alert-dismissible">
 	<button type="button" class="close" data-dismiss="alert">&times;</button>
		<p><strong>Errors:</strong>
		<ul> 
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
		</ul>
		</p>
        </div>
@endif