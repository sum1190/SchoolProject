@extends('app')
 
@section('content')
    <h2>Modifica {{$pc_datas->pc_name}}</h2>
 
    {!! Form::model($pc_datas, ['method'=>'PATCH','route' => ['pc_datas.update', $pc_datas->slug], 'class'=>'form']) !!}
        @include('pc_datas/partials/_form', ['submit_text' => 'Inserisci'])
    {!! Form::close() !!}
@endsection