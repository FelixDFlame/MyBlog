<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{mix("css/app.css")}}">
  </head>
  <body>
    <div class="" id="app">
          <example-component></example-component>
    </div>
  </body>
  <script src="{{ mix("js/app.js") }}" charset="utf-8"></script>
</html>
