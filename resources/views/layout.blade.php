
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="/app/blog.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">    
         @include('navbar')    
         <main role="main" class="container">             
                <div class="row">                  
                    <div class="col-md-8 blog-main">
                            @yield('content')                           
                            @include('errors')     
                    </div>                  
                     <div class="col-md-4 blog-main">
                            @include('sidebar')      
                    </div>  
                </div><!-- /.row -->
           </main><!-- /.container -->        
           @include('footer')
    </div> 

  </body> 

</html>
