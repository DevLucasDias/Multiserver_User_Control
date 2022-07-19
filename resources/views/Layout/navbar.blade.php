<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <script src="js/materialize.js"></script>

</head>
<body class="" >
  <div class="row">
    <div class="col s12 blue darken-4">
      <ul class="tabs blue darken-4 white-text text-lighten-1">
        <li class="tab col s3"><a href="#Dash">Dashboard</a></li>
        <li class="tab col s3"><a  href="#Server">Servers</a></li>
        <li class="tab col s3"><a href="#Users">Users</a></li>
        <li class="tab col s3"><a href="#Admin">Administrador</a></li>
      </ul>
    </div>
    <div id="Dash" class="col s12">@include('Pages.Dashboard')</div>
    <div id="Server" class="col s12">@include('Pages.Servers')</div>
    <div id="Users" class="col s12">@include('Pages.Users')</div>
    <div id="Admin" class="col s12">@include('Pages.Admin')</div>
  </div>

<script>
    var el = document.querySelector('.tabs');
    var instance = M.Tabs.init(el, {});
  </script>
</body>
</html>