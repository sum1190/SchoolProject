@extends('app')
 
@section('content')
    <h2>Aggiungi nuovo PC</h2>
 
    {!! Form::model(new App\Pc_data, ['route' => ['pc_datas.store', $pc_datas->slug], 'class'=>'form']) !!}
        @include('pc_datas/partials/_form', ['submit_text' => 'Inserisci'])
    {!! Form::close() !!}
@endsection