<!DOCTYPE html>
<html>
<head>
    <title>
      @yield('title')
    </title>
   <link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap-3.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap-grid.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ URL::to('css/font-awesome.css') }}">

   <link rel="stylesheet" type="text/css" href="{{ URL::to('css/animate.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ URL::to('css/main.css') }}">

   <script type="text/javascript" src="{{ URL::to('js/jquery.js') }}"></script>
   <script type="text/javascript" src="{{ URL::to('js/jquery.form.js') }}"></script>
   <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
   <script type="text/javascript" src="{{ URL::to('js/jquery.backstretch.js') }}"></script>
   <script type="text/javascript" src="{{ URL::to('js/main.js') }}"></script>
    @yield('styles')
</head>
<body>

<div class="">
    <div class="header">
        <nav class="navbar navbar-default" id="page-header" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    {{-- <a class="navbar-brand" href="#">Title</a> --}}
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        {{-- <li class="active"><a href="#">Link</a></li> --}}
                        {{-- <li><a href="#">Link</a></li> --}}
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li >
                            @yield('firstLink')
                        {{-- <a href="#" style="color:#fff;" id="studentLogin"></a> --}}
                        </li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    </div>
</div>


  @yield('pageBody')
</body>

