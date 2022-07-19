<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <script src="js/materialize.js"></script>



</head>
<body class="" >
  <nav class="blue darken-4">
    <ul>
      <li>  Gestão de Usuários em Multiplos Servidores - SEG</li>
    </ul>
  </nav>
  <div class="row">
    <div class="col s12 blue darken-4">
      <ul class="tabs">
        <li class="tab col s3  blue darken-4 blue-text text-darken-2"><a href="#Dash">Dashboard</a></li>
        <li class="tab col s3 blue darken-4"><a  href="#Server">Servers</a></li>
        <li class="tab col s3 blue darken-4"><a href="#Users">Users</a></li>
        <li class="tab col s3 blue darken-4"><a href="#Admin">Administrador</a></li>
      </ul>
    </div>
    <div id="Dash" class="col s12">Test 1</div>
    <div id="Server" class="col s12">Test 2</div>
    <div id="Users" class="col s12">Test 3</div>
    <div id="Admin" class="col s12">Test 4</div>
  </div>

<script>

    var el = document.querySelector('.tabs');
    var instance = M.Tabs.init(el, {});
  </script>
</body>
</html>