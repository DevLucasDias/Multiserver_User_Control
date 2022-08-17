<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <title>Login</title>
</head>

<body>
@include('Layout.navname')
<br><br>
    <form action="/login" method="POST">
      @csrf
        <div class="row form-group">
            <div class="col s12 m8 l4 offset-m2 offset-l4">
                <div class="card">

                    <div class="card-action  blue darken-4 white-text">
                        <h3>Login</h3>
                    </div>

                    <div class="card-content">
                        <div class="form-field">
                            <label for="email">Usuário</label>
                            <input type="text" id="username" name="username" required>
                        </div><br>

                        <div class="form-field">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" required>
                        </div><br>

                        <div>
                            <button class="btn-large waves-effect waves-dark  blue darken-4" type="submit"
                                name="action" style="width:100%;">Senha</button>
                        </div><br>
     
                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                         @endforeach
                    </div>

                </div>
            </div>
        </div>
    </form>
</body>

</html>
