<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <title>Login</title>
</head>
<body>
<nav class="blue darken-4">
  <ul>
    <li> <a href="/" >  Gestão de Usuários em Multiplos Servidores - SEG</a></li>
  </ul>
</nav><br><br>
<form action="/" method="post">
<div class="row " action="/">
  <div class="col s12 m8 l4 offset-m2 offset-l4">
    <div class="card">

      <div class="card-action  blue darken-4 white-text">
        <h3>Login</h3>
      </div>

      <div class="card-content">
        <div class="form-field">
          <label for="username">Username</label>
          <input type="text" id="username" required>
        </div><br>

        <div class="form-field">
          <label for="password">Password</label>
          <input type="password" id="password" required>
        </div><br>

        <div class="form-field">
          <label for="remember">
          <input type="checkbox" id="remember" >
          <span> Rememeber me</span>
          </label>
          
        </div><br>

        <div >
          <button class="btn-large waves-effect waves-dark  blue darken-4" type="submit" name="action" style="width:100%;">Login</button>
        </div><br>
      </div>

    </div>
  </div>
</div>
</form>
</body>
</html>