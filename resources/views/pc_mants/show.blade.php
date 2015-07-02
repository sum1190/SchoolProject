@extends('app')
@section('content')

		<h2>Lista manutenzioni per <b>{{$pc_datas->pc_name}}</b></h2>
		<table class="table table-condensed table-hover table-bordered">
			<thead>
				<tr>
					<th>Data</th>
					<th>Operazione</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pc_datas->pc_mants as $pm)

				<tr>
					<td>{{$pm->date_mant}}</td>
					<td>{{$pm->text_mant}}

					{!! Form::open(array('class' => '', 'method' => 'DELETE', 'route' => array('pc_datas.pc_mants.destroy',$pc_datas->slug,$pm->id))) !!}
								{!! Form::submit('Elimina voce', array('class'=>'btn btn-material-red btn-sm pull-right')) !!}
								
					{!! Form::close() !!}
				
					<a class="btn btn-material-green btn-sm pull-right" href="{{route('pc_datas.pc_mants.edit',[$pc_datas->slug,$pm->id])}}">Modifica</a>

					</td>
				</tr>
				@endforeach

			</tbody>
		</table>
				<a class="btn btn-material-red" href="{{route('pc_datas.index')}}">Indietro</a>				
				<a class="btn btn-material-blue" href="{{route('pc_datas.pc_mants.create',[$pc_datas->slug])}}">Aggiungi manutenzione</a>




<!-- INSERIRE BOTTONE PER CREARE UNA NUOVA MANUTENZIONE -->


	
	

@endsection