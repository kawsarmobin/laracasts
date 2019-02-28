<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>@yield('title', 'Laracast')</title>
      <link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
      <style media="screen">
          .is-completed {
              text-decoration: line-through;
          }
      </style>
   </head>
   <body>

       {{-- <ul style="text-align: center; font-size: 25px; text-decoration: none;">
           <a style="text-decoration: none;" href="/">Home</a>
           <a style="text-decoration: none;" href="about">About Us</a>
           <a style="text-decoration: none;" href="contact">Contact</a>
       </ul> --}}

       <ul style="text-align: center; font-size: 25px; text-decoration: none;">
           <a style="text-decoration: none;" href="/projects/create">Create Project</a>
           <b><span style="color: #93C830">|</span></b>
           <a style="text-decoration: none;" href="/projects">All Project</a>
       </ul>

       <div class="container">
           @yield('content')
       </div>

   </body>
</html>
