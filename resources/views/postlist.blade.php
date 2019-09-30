@extends('layouts.myapp')
@section('content')
            <table class="table border">
                <thead>
                    <th>S.N.</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>status</th>
                    <th>Action</th>
                    <th>Image</th>
                    <th>Related Images</th>
                </thead>
                <tbody>
                    
                        @if($post_data)
                        @foreach($post_data as $key=>$post_detail)
                        <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$post_detail->title}}</td>
                        <td>{{$post_detail->description}}</td>
                        <td>{{ucfirst($post_detail->status)}}</td>
                        <td><a href="{{url('/post/read/'.$post_detail->id)}}">Read</a> / <a href="{{url('/post/edit/'.$post_detail->id)}}">Edit</a> / <a href="{{url('/post/delete/'.$post_detail->id)}}">Delete</a></td>
                        <td><img src="{{asset('thumbnail/'.$post_detail->image)}}" alt="{{$post_detail->image}}"  ></td> 
           
                    </tr>
                        @endforeach
                        @endif
                    
                </tbody>
            </table>
            <div class="row">
            @foreach ($post_data as $page)
            
                        <div class="col-sm-3">
               <img src="{{ asset('uploads/' . $page->files) }}" class="img img-responsive img-thumbnail" /> 
            </div>

@endforeach
</div>
        
          
            
           
        </body>
  @endsection