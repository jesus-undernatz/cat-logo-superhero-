<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Super-Heróis</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Mudar a cor de fundo do menu lateral para um tom "Batman" (Grafite escuro) */
        .main-sidebar {
            background-color: #1e2229 !important;
        }

        /* Dar um efeito neon azul nos badges dos nomes dos heróis */
        .badge-primary {
            background-color: #007bff !important;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.6);
        }

        /* Mudar a cor do texto do título do menu */
        .brand-link .brand-text {
            color: #ffc107 !important; /* Amarelo ouro estilo Superman */
            font-weight: bold;
            text-transform: uppercase;
        }

        /* Customizar os cards para terem bordas mais arredondadas */
        .card {
            border-radius: 12px !important;
            overflow: hidden;
        }

        body {
            background-color: #245db3;
        }
        .table-hover tbody tr:hover {
            background-color: rgba(255, 193, 7, 0.1) !important; /* Linha brilha amarelo ao passar o mouse */
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link">
            <span class="brand-text font-weight-light">Batman's Database</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    <li class="nav-item">
                        <a href="{{ route('superheroes.index') }}" class="nav-link active">
                            <i class="nav-icon fas fa-mask"></i>
                            <p>Catálogo</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="content-wrapper pt-3">
        <div class="content">
            <div class="container-fluid">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
                        {{ session('success') }}
                    </div>
                @endif

                @yield('content')
            </div>
        </div>
    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
