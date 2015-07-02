@extends('app')
@section('content')
<div class="row">
	<div class="jumbotron">
	@if(Session::has('message'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Info: </strong> {{Session::get('message')}}
		</div>
	@endif
		<h2>Specifiche di <b>{{$pc_datas->pc_name}}</b></h2>
		<table class="table table-bordered table-hover table-condensed">
			<thead>
				<tr>
					<th>Componente</th>
					<th>Modello</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Processore</td>
					<td>{{$pc_specs->processor}}</td>
				</tr>
				<tr>
					<td>Scheda madre</td>
					<td>{{$pc_specs->motherboard}}</td>
				</tr>
				<tr>
					<td>RAM</td>
					<td>{{$pc_specs->ram}}</td>
				</tr>
				<tr>
					<td>Scheda video</td>
					<td>{{$pc_specs->videocard}}</td>
				</tr>
				<tr>
					<td>Hard disk</td>
					<td>{{$pc_specs->harddisk}}</td>
				</tr>
				<tr>
					<td>Grandezza partizione C</td>
					<td>{{$pc_specs->size_c}}</td>
				</tr>
				<tr>
					<td>Grandezza partizione D</td>
					<td>{{$pc_specs->size_d}}</td>
				</tr>
				
			</tbody>
		</table>
		<a class="btn btn-primary" href="{{route('pc_datas.index')}}">Indietro</a>
		<a class="btn btn-material-blue btn-primary" href="{{route('pc_datas.pc_specs.edit',[$pc_datas->slug,$pc_specs->pcid])}}">Modifica</a>
	</div>
</div>
@endsection