@extends('layouts.master')
@section('content')
<script type="text/javascript" src="{{ asset('/js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
  tinymce.init({
    selector : "textarea",
    plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
    toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
  }); 
</script>
<a href="{{ route('newsarticles.index') }}" class="btn btn-info">Back to all Articles</a>
    <h1>Update News Article</h1>
    {!! Form::model($newsarticle,['method' => 'PATCH','route'=>['newsarticles.update',$newsarticle->id],'files' => true]) !!}
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