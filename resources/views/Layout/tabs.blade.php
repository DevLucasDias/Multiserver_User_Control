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
      <div id="Home" class="col s12">@include('Pages.Home')</div>
      <div id="Server" class="col s12">@include('Pages.Servers')</div>
      <div id="Users" class="col s12">@include('Pages.Users')</div>
      <div id="Admin" class="col s12">@include('Pages.Admin')</div>
    </div>
  
  <script>
      var el = document.querySelector('.tabs');
      var instance = M.Tabs.init(el, {});
    </script>
  </body>