<!DOCTYPE html>
<html lang="PT-BR">
    <head>
      <title>Locadora</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link type="text/css" rel="stylesheet" href = {{ url('css/style.css') }} >
    </head>
    <body>

    <nav class="navbar navbar-inverse zeraMargin">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Locadora</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastros<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href={{ url('cliente') }}>Cliente</a></li>
              <li><a href="#">Page 1-2</a></li>
              <li><a href="#">Page 1-3</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left" action="/action_page.php">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search" name="search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </nav>



        <div class="conteudo">
            @yield('content')
        </div>

    </body>
</html>

