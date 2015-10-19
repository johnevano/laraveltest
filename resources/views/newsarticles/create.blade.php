@extends('layouts.master')

@section('content')

<h1>Add a New News Article</h1>
<hr>
{!! Form::open([
    'route' => 'newsarticles.store'
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Body:', ['class' => 'control-label']) !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
            {!! Form::label('photo_url', 'Choose an image') !!}
            {!! Form::file('photo_url') !!}
        </div>

{!! Form::submit('Create New Article', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
@stop