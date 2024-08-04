<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome CDN for icons -->
  <link 
  rel="stylesheet" 
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <title>Application</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <div id="app"></div>
        @vite('resources/js/app.js')
    </body>
</html>