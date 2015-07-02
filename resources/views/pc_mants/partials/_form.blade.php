
<style>
	.form-control-wrapper .floating-label
	{
		color:#000;
	};
</style>

<div class="form-group">
    {!! Form::input('text','date_mant',null,['class'=>'form-control floating-label','data-mask'=>'99/99/9999','placeholder'=>'Data operazione (formato gg/mm/aaaa)']) !!}
</div>

<div class="form-group">    
{!! Form::text('text_mant',null,['class'=>'form-control floating-label ', 'placeholder'=>'Tipo operazione']) !!}
</div>

<div class="form-group">
	<a class="btn btn-material-blue" href="{{route('pc_datas.pc_mants.show',$pc_datas->slug)}}">Indietro</a>
    {!! Form::submit($submit_text, ['class'=>'btn btn-material-green']) !!}
    {!! Form::reset("Cancella campi", ['class'=>'btn btn-material-red']) !!}
</div>


<!-- completare -->





