@extends('app')  
@section('content')
    <h2>Modifica operazione di manutenzione di</h2>

    {!! Form::model($pm, ['method'=>'PATCH','route' => ['pc_datas.pc_mants.update', $pc_datas->slug,$pm->id], 'class'=>'form']) !!}
        @include('pc_mants/partials/_form', ['submit_text' => 'Modifica'])
    {!! Form::close() !!}

@endsection