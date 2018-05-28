@extends('layout')

@section('content')

<h1>{{$post->title}}</h1>

<p>{{$post->body}}</p>

<div class="comments">
       @foreach($post->comments as $comment)    

       <ul class='list-group'>
       
            <li class='list-group-item'>


                <strong>
                        {{$comment->created_at->diffForHumans()}} :&nbsp;

                </strong>    
    
                <p>  {{$comment->body}}  </p>   

            </li>  
       
       </ul>   

       @endforeach

       <hr>

            <div class='card'>
            <div class='card-block'>
                <form method="POST" action="/posts/{{$post->id}}/comments">
                        {{csrf_field()}}                     
                                      
                    <div class="form-group">                               
                    <textarea class="form-control" placeholder="Comment" name="body"></textarea>
                    </div>                
                
                    <div class="form-group">      
                    <button type="submit" class="btn btn-default">Add Comment</button>
                    </div>
                </form>
            </div>
            </div>


</div>

@endsection

@section('footer')


@endsection


