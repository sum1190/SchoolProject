
<style>
	.form-control-wrapper .floating-label
	{
		color:#000;
	};
</style>

<div class="form-group">    
{!! Form::text('processor',null,['class'=>'form-control floating-label ', 'placeholder'=>'Processore']) !!}
</div>
<div class="form-group">    
{!! Form::text('motherboard',null,['class'=>'form-control floating-label ', 'placeholder'=>'Scheda madre']) !!}
</div>
<div class="form-group">    
{!! Form::text('ram',null,['class'=>'form-control floating-label ', 'placeholder'=>'RAM']) !!}
</div>
<div class="form-group">    
{!! Form::text('videocard',null,['class'=>'form-control floating-label ', 'placeholder'=>'Scheda video']) !!}
</div>
<div class="form-group">    
{!! Form::text('harddisk',null,['class'=>'form-control floating-label ', 'placeholder'=>'Hard disk']) !!}
</div>
<div class="form-group">    
{!! Form::text('size_c',null,['class'=>'form-control floating-label ', 'placeholder'=>'Grandezza C:']) !!}
</div>

<div class="form-group">    
{!! Form::text('size_d',null,['class'=>'form-control floating-label ', 'placeholder'=>'Grandezza D:']) !!}
</div>

<div class="form-group">
	<a class="btn btn-material-blue" href="{{route('pc_datas.pc_specs.show',[$pc_datas->slug,$pc_datas->id])}}">Indietro</a>
    {!! Form::submit($submit_text, ['class'=>'btn btn-material-green']) !!}
    {!! Form::reset("Cancella campi", ['class'=>'btn btn-material-red']) !!}
</div>


<!-- completare -->





