<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">
        <div class = col-xs-4>
           @include('includes.bio') 
        </div>
        <div class = col-xs-8>
           @yield('content')
       </div>
    </div>
</div>
    <footer class="row">
      @include('includes.js')
    </footer>


</body>
</html>