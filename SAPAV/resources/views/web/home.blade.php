<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajuste de Vagas no IC</title>
    
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{ url ('assets/css/tentativa.css')}}">
</head>
<body>
    <img src="{{ url ('assets/src/logo-ic.png')}}"  width="150" height="150" id="logo_ic">
    <nav class="nav">
        <div>
            <p id="ajustes_name">AJUSTES IC</p>
        </div>
      </nav>

    <!--Seção do Login-->
    <form class="login" method="post" action="{{route('auth_data')}}">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <p id="login_text">Login</p>
        <input type="email" class="retangulo_login" name="email">
        <p id="login_text" style="top:180px;">Senha</p>
        <input type="password" class="retangulo_login" name="password" style="top:180px">
        <a href="{{url('assets/recuperation_pw.html')}}" target="_blank"><p id="forget">Esqueci Minha Senha</p></a>
        <button type="submit" id="btn_enter"><p id="login_enter">Entrar</p></button>
    </form>
  <!--Seção do Novo Usuário-->
    <section>
           <a  class="new_user" href="{{url('assets/new_user_copia.html')}}" target="_blank"><button id="new_user_text" style="background-color:#42B72D; border:none!important;">Nova(o) por aqui? Clique aqui para criar uma conta.</button> </a> 
    </section>

    
</body>
</html>