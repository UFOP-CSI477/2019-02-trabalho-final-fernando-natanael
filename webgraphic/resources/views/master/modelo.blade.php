<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Gerenciador de TCC's - @yield('title')</title>
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Live Search</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>--}}

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<header class=" navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">

<nav class="navbar navbar-dark bg-dark" style="background-color: darkblue;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
{{--                <li><a href="{{route('area_geral_professores')}}">Pesquisa professor por area</a></li>--}}
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('servicos')}}">Serviços</a></li>
                <li><a href="{{route('produtos')}}">Produtos</a></li>
                <li><a href="{{route('clientes')}}">Clientes</a></li>
                <li><a href="{{route('funcionarios')}}">Funcionários</a></li>
            </ul>
        </div>
    </div>
</nav>
</header>
{{--Area para injeção--}}
<div class="container">
    @yield('content')
</div>
{{--Rodapé com assinatura--}}
<footer class="page-footer">
    <div class="footer navbar-fixed-bottom footer-copyright text-center py-3">© {{date('Y')}} Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> natanaelemilo@gmail.com</a>
    </div>
</footer>

</body>
</html>