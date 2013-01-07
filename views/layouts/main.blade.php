  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <title>{{$title}}</title>
    {{Asset::container('header')->styles()}}
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
        {{$content}}
    </div>
  {{Asset::container('footer')->scripts()}}
  </body>
  </html>