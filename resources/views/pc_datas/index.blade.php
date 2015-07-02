@extends('app')
@section('content')
<h2>Lista PC caricati</h2>
@if ( !$pc_datas->count() )
Nessun computer caricato nel sistema
@else
<div class="row">
	@if(Session::has('message'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Info: </strong> {{Session::get('message')}}
	</div>
	@endif
	@foreach( $pc_datas as $pcd )
	<div class="col-xs-12 col-md-4">
		

		<table class="table table-hover table-condensed table-bordered" style="background-color:#FFF">
			<thead>
				<tr>
					<th><h3>{{$pcd->pc_name}}</h3></th>
					<th>
						<div class="btn-group pull-right">
							<a class="btn btn-material-green dropdown-toggle pull" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-cog"></i></a>
							<ul class="dropdown-menu">
								<li><a href="{{route('pc_datas.pc_specs.show',[$pcd->slug,$pcd->id])}}">Specifiche PC</a></li>
								<li><a href="{{route('pc_datas.pc_mants.show',[$pcd->slug,$pcd->id])}}">Manutenzioni</a></li>
								
								@if (Auth::check())
								<li><a href="{{route('pc_datas.edit',[$pcd->slug])}}">Modifica voce</a></li>
								<li class="divider"></li>
								<li>{!! Form::open(array('class' => '', 'method' => 'DELETE', 'route' => array('pc_datas.destroy', $pcd->slug))) !!}
									{!! Form::submit('Elimina voce', array('class'=>'btn')) !!}
									
								{!! Form::close() !!}</li>
								@endif
							</ul>
						</div>
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Gruppo di lavoro</td>
					<td><b>{{$pcd->workgroup}}</b></td>
				</tr>
				<tr>
					<td>Password Amministratore</td>
					<td><b>{{$pcd->admin_pass}}</b></td>
				</tr>
				<tr>
					<td>Password BIOS</td>
					<td><b>{{$pcd->bios_pass}}</b></td>
				</tr>
				<tr>
					<td>N. inventario PC</td>
					<td><b>{{$pcd->pc_inventory}}</b></td>
				</tr>
				<tr>
					<td>N. inventario schermo</td>
					<td><b>{{$pcd->screen_inventory}}</b></td>
				</tr>
				<tr>
					<td>Motivazione scarico</td>
					<td><b>{{$pcd->drop_motivation}}</b></td>
				</tr>
				<tr>
					<td>Sistema operativo</td>
					<td><b>{{$pcd->so}}</b></td>
				</tr>
				<tr>
					<td>Product key sistema operativo</td>
					<td><b>{{$pcd->pk_win}}</b></td>
				</tr>
				<tr>
					<td>Product key Office</td>
					<td><b>{{$pcd->pk_office}}</b></td>
				</tr>
				<tr>
					<td>Software installati</td>
					<td><b>{{$pcd->installed_software}}</b></td>
				</tr>
				<tr>
					<td>Antivirus</td>
					<td><b>{{$pcd->antivirus}}</b></td>
				</tr>
				<tr>
					<td>Browser</td>
					<td><b>{{$pcd->browser}}</b></td>
				</tr>
			</tbody>
		</table>
	</div>
	
	@endforeach
</div>
@endif
@endsection