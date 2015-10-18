@extends('layouts.master')

@section('content')
 <h1>Test Users</h1>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>Name</th>
         <th>Email</th>
         <th colspan="2">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($users as $user)
         <tr>
             <td>{{ $user->id }}</td>
             <td>{{ $user->name }}</td>
             <td>{{ $user->email }}</td>
             <td><a href="{{route('users.edit',$user->id)}}" class="btn btn-warning">Edit</a></td>
             <td>
             {!!Form::open(array('method'=>'DELETE', 'route' => array('users.destroy', $user->id)))!!} 
               {!!Form::submit('Delete', array('class'=>'btn btn-danger'))!!}
               {!!Form::close()!!}
			   
			  

  
             </td>
			 <script>
jQuery(document).ready(function($) {
   $('.btn-danger').submit(function(e){
     e.preventDefault();
     url = $(this).attr('action');
     BootstrapDialog.confirm('Are you sure you want to delete?', function(result){
       if(result) {
        $.ajax({url: url, type :"DELETE"});
       }
     });
   });
});
</script>
         </tr>
     @endforeach

     </tbody>

 </table>
@endsection
@stop