<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href={{asset("css/materialdesignicons.min.css")}}>
  <link rel="stylesheet" href={{asset("css/vendor.bundle.base.css")}}>
  <link rel="stylesheet" href={{asset("css/style.css")}}>

  <link rel="shortcut icon" href="images/favicon.png" />

  <title>{{$tittle}}</title>
  
</head>

<body>


  <script src={{asset("js/vendor.bundle.base.js")}}></script>
  <script src={{asset("vendors/chart.js/Chart.min.js")}}></script>
  <script src={{asset("js/off-canvas.js")}}></script>
  <script src={{asset("js/hoverable-collapse.js")}}></script>
  <script src={{asset("js/template.js")}}></script>
  <script src={{asset("js/dashboard.js")}}></script>
</body>

@yield('content')

</html>