<!-- Nomvertue Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomVertue', 'Nomvertue:') !!}
    {!! Form::text('nomVertue', null, ['class' => 'form-control']) !!}
</div>

<!-- Recette Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('recette', 'Recette:') !!}
    {!! Form::textarea('recette', null, ['class' => 'form-control']) !!}
</div>

<!-- Utilisation Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('utilisation', 'Utilisation:') !!}
    {!! Form::textarea('utilisation', null, ['class' => 'form-control']) !!}
</div>

<!-- Plante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plante_id', 'Plante Id:') !!}
    {!! Form::select('plante_id', $plantes, null, ['class' => 'form-control']) !!}
</div>

<!-- Regionpratiquee Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('regionPratiquee_id', 'Regionpratiquee Id:') !!}
    {!! Form::select('regionPratiquee_id', $regionPratiquees, null, ['class' => 'form-control']) !!}
</div>

<!-- Partieutilisee Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('partieUtilisee_id', 'Partieutilisee Id:') !!}
    {!! Form::select('partieUtilisee_id', $partieUtilisees, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('vertues.index') }}" class="btn btn-default">Cancel</a>
</div>
