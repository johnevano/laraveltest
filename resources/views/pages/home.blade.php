@extends('layouts.master')

@section('content')
 <h1>Peru BookStore</h1>
 <a href="{{url('/create')}}" class="btn btn-success">Create Book</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>Name</th>
         <th>Email</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($users as $user)
         <tr>
             <td>{{ $user->id }}</td>
             <td>{{ $user->name }}</td>
             <td>{{ $user->email }}</td>
             <td><a href="{{url('users',$user->id)}}" class="btn btn-primary">View</a></td>
             <td><a href="{{route('users.edit',$user->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['users.destroy', $user->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>
@endsection