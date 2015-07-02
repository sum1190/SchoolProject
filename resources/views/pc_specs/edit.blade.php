@extends('app')  
@section('content')

    <h2>Modifica specifiche di {{$pc_datas->pc_name}}</h2>
 
    {!! Form::model($ps, ['method'=>'PATCH','route' => ['pc_datas.pc_specs.update', $pc_datas->slug,$ps->id], 'class'=>'form']) !!}
        @include('pc_specs/partials/_form', ['submit_text' => 'Inserisci'])
    {!! Form::close() !!}

@endsection