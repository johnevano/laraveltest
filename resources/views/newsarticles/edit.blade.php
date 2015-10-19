@extends('layouts.master')
@section('content')
<a href="{{ route('newsarticles.index') }}" class="btn btn-info">Back to all Articles</a>
    <h1>Update News Article</h1>
    {!! Form::model($newsarticle,['method' => 'PATCH','route'=>['newsarticles.update',$newsarticle->id]]) !!}
    <div class="form-group">
        {!! Form::label('Title', 'Title:') !!}
        {!! Form::text('title',null,array('required', 
              'class'=>'form-control')) !!}
    </div>
	<div class="form-group">
        {!! Form::label('Body', 'Body:') !!}
        {!! Form::textarea('body',null,array('required', 
              'class'=>'form-control')) !!}
    </div>
	<div class="form-group">
            {!! Form::label('photo_url', 'Choose an image') !!}
            {!! Form::file('photo_url') !!}
        </div>
	
	
   
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop