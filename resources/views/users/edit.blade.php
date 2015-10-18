@extends('layouts.master')
@section('content')
    <h1>Update User</h1>
    {!! Form::model($user,['method' => 'PATCH','route'=>['users.update',$user->id]]) !!}
    <div class="form-group">
        {!! Form::label('Name', 'Name:') !!}
        {!! Form::text('name',null,array('required', 
              'class'=>'form-control')) !!}
    </div>
	<div class="form-group">
        {!! Form::label('Email', 'Email:') !!}
        {!! Form::text('email',null,array('required', 
              'class'=>'form-control')) !!}
    </div>
	<div class="form-group">
        {!! Form::label('Status', 'Status:') !!}
       {!! Form::select('status',['verified'=>'verified','unverified'=>'unverified', 'canceled'=>'canceled'],null,['class'=>'form-control']) !!}
    </div>
	<div class="form-group">
        {!! Form::label('Admin', 'Admin:') !!}
       {!! Form::select('is_admin',['1'=>'Yes','0'=>'No'],null,['class'=>'form-control']) !!}
    </div>
	
   
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop