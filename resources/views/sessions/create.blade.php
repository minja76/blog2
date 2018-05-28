@extends('layout')

@section('content')


    <h1>Login</h1>
<form method="POST" action="/login">

    {{csrf_field()}}
       

        <div class="form-group">
                <label for="title">Email</label>
                <input type="email" class="form-control" id="email" placeholder="email" name="email">
        </div>

        <div class="form-group">
                <label for="password">Email</label>
                <input type="password" class="form-control" id="password" placeholder="password" name="password">
        </div>


        <div class="form-group">      
        <button type="submit" class="btn btn-primary">Login</button>
       </div>
      


       

</form>

@endsection




@section('footer')


@endsection

