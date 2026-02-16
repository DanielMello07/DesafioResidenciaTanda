<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Gerenciador de Clientes</title>
</head>
<body class="d-flex flex-column min-vh-100">

    <style>
        /* Aumenta o tamanho do texto e o espaço interno dos botões */
        .paginacao .page-link {
            font-size: 1.2rem; 
            padding: 10px 20px; 
            border-radius: 8px;
            margin: 0 3px; 
        }
        
        
        .paginacao .page-item.active .page-link {
            background-color: #0d6efd; 
            border-color: #0d6efd;
        }
    </style>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand fw-bold" href="{{ route('clients.index') }}">
                    Gerenciador de Clientes
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('clients.index') }}">Início</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    

    <div class="container mt-4">
        @yield('content') 
    </div>

    <br><br><br>

    <footer class="bg-dark text-white pt-4 pb-2 mt-auto mt-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <p class="mb-1"><strong>Gerenciador de Clientes</strong> - Teste Técnico</p>
                    <p class="small text-secondary">
                        Desenvolvido com Laravel 11, Bootstrap 5 e SQLite.
                    </p>
                </div>
            </div>
            <hr class="bg-secondary">
            <div class="row">
                <div class="col-md-12">
                    <p class="small">&copy; 2026 - Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>