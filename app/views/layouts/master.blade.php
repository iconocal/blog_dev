<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rocketdog Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">   
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    
    @include('navbar')
    @include('jumbo')

    @if (Session::has('successMessage'))
    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif

    @if (Session::has('errorMessage'))
        <div class='alert alert-danger'>{{{Session::get('errorMessage')}}}</div>
    @endif

    @yield('content')

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>