
<style>
	.form-control-wrapper .floating-label
	{
		color:#000;
	};
</style>



<div class="form-group">
    {!! Form::text('pc_name',null,['class'=>'form-control floating-label ', 'placeholder'=>'Nome del pc']) !!}
</div>


<div class="form-group">    
{!! Form::text('workgroup',null,['class'=>'form-control floating-label ', 'placeholder'=>'Gruppo di lavoro']) !!}
</div>
<div class="form-group">    
{!! Form::text('admin_pass',null,['class'=>'form-control floating-label ', 'placeholder'=>'Password admin']) !!}
</div>
<div class="form-group">    
{!! Form::text('bios_pass',null,['class'=>'form-control floating-label ', 'placeholder'=>'Password del bios']) !!}
</div>
<div class="form-group">    
{!! Form::text('pc_inventory',null,['class'=>'form-control floating-label ', 'placeholder'=>'Numero inventario del pc']) !!}
</div>
<div class="form-group">    
{!! Form::text('screen_inventory',null,['class'=>'form-control floating-label ', 'placeholder'=>'Numero inventario dello schermo']) !!}
</div>
<div class="form-group">    
{!! Form::text('drop_motivation',null,['class'=>'form-control floating-label ', 'placeholder'=>'Motivazione dello scarico']) !!}
</div>
<div class="form-group">    
{!! Form::text('so',null,['class'=>'form-control floating-label ', 'placeholder'=>'Sistema operativo']) !!}
</div>


<div class="form-group">    
{!! Form::text('pk_win',null,['class'=>'form-control floating-label ', 'placeholder'=>'Product Key Sistema operativo']) !!}
</div>

<div class="form-group">    
{!! Form::text('pk_office',null,['class'=>'form-control floating-label ', 'placeholder'=>'Product key Office']) !!}
</div>

<div class="form-group">    
{!! Form::text('installed_software',null,['class'=>'form-control floating-label ', 'placeholder'=>'Software installati']) !!}
</div>
<div class="form-group">    
{!! Form::text('antivirus',null,['class'=>'form-control floating-label ', 'placeholder'=>'Antivirus']) !!}
</div>
<div class="form-group">    
{!! Form::text('browser',null,['class'=>'form-control floating-label ', 'placeholder'=>'Browser']) !!}
</div>
<div class="form-group">
	<a class="btn btn-material-blue"><</a>
    {!! Form::submit($submit_text, ['class'=>'btn btn-material-green']) !!}
    {!! Form::reset("Cancella campi", ['class'=>'btn btn-material-red']) !!}
</div>


<!-- completare -->




