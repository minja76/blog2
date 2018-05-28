@extends('layout')

@section('content')


    <h1>Unesite post</h1>
<form method="POST" action="/posts">

    {{csrf_field()}}
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" placeholder="Title" name="title">
        </div>


        <div class="form-group">
                <label for="title">Body</label>
                <textarea class="form-control" id="body" placeholder="Body" name="body"></textarea>
        </div>


        <div class="form-group">      
        <button type="submit" class="btn btn-primary">Submit</button>
       </div>
      


       

</form>

@endsection




@section('footer')


@endsection

