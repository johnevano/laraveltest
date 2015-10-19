@extends('layouts.master')

@section('content')
 <h1>Test News Articles</h1>
 <hr>
 <div class="row">
	<div class="col-md-2"><a href="{{route('newsarticles.create')}}" class="btn btn-default">Create Article</a>
	</div>
	<div class="col-md-2"><a href="" class="btn btn-default">View Articles</a>
	</div>
</div>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>Title</th>
		 <th>Article Image</th>
		 <th colspan="3">Actions</th>
         
     </tr>
     </thead>
     <tbody>
     @foreach ($newsarticles as $newsarticle)
         <tr>
             <td>{{ $newsarticle->id }}</td>
             <td>{{ $newsarticle->title }}</td>
			  <td><img src="{{ $newsarticle->photo_url }}" alt="{{ $newsarticle->title }}" width="100" /></td>
			  <td><a href="{{route('newsarticles.show',$newsarticle->title_slug)}}" class="btn btn-warning">View</a></td>
			  <td><a href="{{route('newsarticles.edit',$newsarticle->id)}}" class="btn btn-warning">Edit</a></td>
             <td>
             {!!Form::open(array('method'=>'DELETE', 'route' => array('newsarticles.destroy', $newsarticle->id)))!!} 
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
 {!! $newsarticles->render() !!}
@endsection
@stop