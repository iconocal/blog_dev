<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
<!--       <a class="navbar-brand" href="#">Rocketdog!</a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav"></ul>




<!-- NAVBAR SEARCH -->

      {{ Form::open(array('action' => 'PostsController@index', 'method' => 'GET')) }}

      <div class="form-group">
        {{ Form::text('search') }}
      </div>

      <div class="form-group">
        {{ Form::submit('Search', array('class' => 'btn btn-primary')) }}
      </div> 
    {{ Form::close() }}
<!-- END NAVBAR SEARCH -->
























    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>