@extends('app')
@section('content')

<h2>Pc specs</h2>

@if ( !$pc_specs->count() )
You have no projects
@else
<div class="row">
	<div class="col-xs-12 col-md-4">
		<div id="accordion">

		</div>
	</div>
</div>
@endif
@endsection