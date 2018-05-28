<aside class="col-md-4 blog-sidebar">
    <div class="p-100 mb-6 bg-light rounded">
      <h4 class="font-italic">About</h4>
      <p class="mb-4">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>

    <div class="p-4">
      <h4 class="font-italic">Archives</h4>
      <ol class="list-unstyled mb-4">

      @foreach ($archives as $stats)
        <li><a href="/?month={{$stats['month']}}&year={{$stats['year']}}">
          {{$stats['month'].' '.$stats['year']}}
        </a></li>
        @endforeach
       
      </ol>
    </div>

    <div class="p-4">
      <h4 class="font-italic">Elsewhere</h4>
      <ol class="list-unstyled">
        <li><a href="#">GitHub</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Facebook</a></li>
      </ol>
    </div>
  </aside><!-- /.blog-sidebar -->