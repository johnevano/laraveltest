@extends('layouts.master')

@section('content')
<a href="{{ route('newsarticles.index') }}" class="btn btn-info">Back to all Articles</a>
<h1>{{ $newsarticle->title }}</h1>
<hr>
<div class="col-md-4">
<img src="{{ $newsarticle->photo_url}}" class="img-responsive" alt="{{ $newsarticle->title }}"/>
</div>
<div class="col-md-8">
<p>{{ $newsarticle->body}}</p>
</div>



@stop