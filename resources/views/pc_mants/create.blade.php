@extends('app')  
@section('content')

    <h2>Aggiungi una nuova manutenzione per {{$pc_datas->pc_name}}</h2>
 
    {!! Form::model(new App\Pc_mants, ['method'=>'POST','route' => ['pc_datas.pc_mants.store', $pc_datas->slug,$pcm->id], 'class'=>'form']) !!}
        @include('pc_mants/partials/_form', ['submit_text' => 'Inserisci'])
    {!! Form::close() !!}

@endsection