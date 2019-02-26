<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>@yield('title', 'Laracast')</title>
   </head>
   <body>

      <ul style="text-align: center; font-size: 25px; text-decoration: none;">
         <a style="text-decoration: none;" href="/">Home</a>
         <a style="text-decoration: none;" href="about">About Us</a>
         <a style="text-decoration: none;" href="contact">Contact</a>
      </ul>

      @yield('content')

   </body>
</html>
