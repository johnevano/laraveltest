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
<h1>Add a New News Article</h1>
<hr>
{!! Form::open([
    'route' => 'newsarticles.store',
	'files' => true
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