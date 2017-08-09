<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
  </head>
  <body>
    <div class="container">
      @yield('content')
    </div>



    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
     $(document).ready(function() {
       $('#doUpload').click(function(event) {
         $('#upload').click();
       })
     });

    </script>


  </body>
</html>
