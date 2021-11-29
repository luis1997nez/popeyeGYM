<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('slug', 'Url amigable') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Descripcion') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    
    {!! Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) !!}
    
</div>