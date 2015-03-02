<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::to('/') }}"><i class="fa fa-home fa-2x"></i></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav"></ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://www.linkedin.com/in/calvinglover"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
                <li><a href="https://twitter.com/cgin09"><i class="fa fa-twitter fa-2x"></i></a></li> 
                <li><a href="mailto:calvin78209@gmail.com"><i class="fa fa-envelope fa-2x"></i></a></li>

                     

            <!-- NAVBAR SEARCH -->
                {{ Form::open(array('action' => 'PostsController@index', 'method' => 'GET', 'class' => 'navbar-form navbar-left')) }}

                <div class="form-group">
                    {{ Form::text('search', NULL) }}
                </div>

                <div class="form-group">
                    {{ Form::submit('Search', array('class' => 'btn btn-default')) }}
                </div> 
                {{ Form::close() }}
            <!-- END NAVBAR SEARCH -->
            <!-- Logout -->
                @if (Auth::guest())
                    <li><a href="{{{ action('HomeController@doLogin') }}}" class="pull-right">Log In</a></li>
                @endif
                @if (Auth::check())
                    <li><a href="{{{ action('HomeController@doLogout') }}}" class="pull-right">Logout</a></li>
                @endif
            </ul>


        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>