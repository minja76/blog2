@extends('layout')

@section('content')

    @if (count($posts)>0)
        @foreach($posts as $post)

        <div class="blog-post">
               <a href="posts/{{$post->id}}"> <h2 class="blog-post-title">{{$post->title}}</h2></a>
               <p class="blog-post-meta">{{$post->user->name}} on
                {{$post->created_at->toDateString()}}</p>
    
                <p>  {{$post->body}}  </p>
       </div> 

        @endforeach

      @endif  


    <nav class='blog-pagination'>          
      <a class='btn btn-online-primary' href='#'>Older</a>
      <a class='btn btn-online-secondary disabled' href='#'>Newer</a>
    </nav> 
       

@endsection




@section('footer')


@endsection

