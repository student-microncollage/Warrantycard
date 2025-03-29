<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="{{asset('assets/img/kaiadmin/favicon.ico')}}"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="{{asset('assets/js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["{{asset('assets/css/fonts.min.css')}}"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

      <script>
        $(document).ready(function(){
          setTimeout(function(){
            $("#success-message").fadeOut('slow')
          },4000);
        });
      </script>
      {{-- <script>
          $(document).ready(function() {
              setTimeout(function() {
                  $("#success-message").fadeOut("slow");
              }, 3000);
          });
      </script> --}}




      {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}


     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/kaiadmin.min.css')}}" />
    
    
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />
   
  </head>
  <body>

@include('backendlayouts.header')

@include('backendlayouts.sidebar')


@yield('content')

@include('backendlayouts.footer')

