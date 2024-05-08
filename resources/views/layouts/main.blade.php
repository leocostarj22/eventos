<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ionicons@5.0.0/dist/ionicons.min.css">        
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
          
      </head>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="/css/style.css">
    </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid">
                        <!-- Logomarca -->
                          <a class="navbar-brand" href="#"><img src="/img/logo.png" class="logo"></a>
                          <!-- Botão de toggle para dispositivos móveis -->
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>
                      <!-- Itens do menu -->
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                      <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Eventos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/events/create">Criar Evento</a>
                            </li>
                            @auth
                            <li class="nav-item">
                            <a class="nav-link" href="/dashboard">Meus Eventos</a>
                            </li>
                            <li class="nav-item">
                              <form action="/logout" method="POST">
                                  @csrf
                                      <a href="logout" class="nav-link" 
                                      onclick="event.preventDefault();
                                      this.closest('form').submit();">Sair
                                      </a>
                              </form>
                            </li>
                            @endauth
                              @guest
                                <li class="nav-item">
                                  <a class="nav-link" href="/login">Entrar</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="/register">Registar</a>
                                </li>
                            @endguest
                      </ul>
                    </div>
                </div>
            </nav>
          </div>
        </nav>    
      <main>
        <div class="container-fluid">
          <div class="row">
            @if (session('msg'))
            <p class="msg">{{ session('msg') }}</p>
            @endif
            @yield('content')
          </div>
        </div>
      </main>

            <footer>
                <p> Criado por LeoCostaDeveloper</a> &copy; 2024 | Todos os direitos reservados.</p>
            </footer>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
          </body>
</html>