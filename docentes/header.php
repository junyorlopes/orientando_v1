<!-- Menu e header docentes page -->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        <link href="../utilitarios/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="../utilitarios/summernote-master/dist/summernote.css" rel="stylesheet">
        <link href="../utilitarios/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../utilitarios/chosen_v1.6.2/chosen.min.css" rel="stylesheet">
        <link href="css/default.css" type="text/css" rel="stylesheet">
        <link href="css/nova-mensagem.css" type="text/css" rel="stylesheet">
        <link href="css/mensagens.css" type="text/css" rel="stylesheet">
    </head>
    <body>
       <div class="container-fluid disabled-table">
            <div class="row disabled-table-row">
                <!-- Menu slide -->
                <div class="col-md-2 col-sm-1 hidden-xs disabled-table-cell valing-top" id="side-menu">
                    <h1 class="hidden-xs hidden-sm">Orientando</h1>
                    <div class="hidden-xs hidden-sm" align="center">
                        <div class="text-center img-perfil-fundo">
                            <img class="img-perfil img-circle" src="../imagens/icone_perfil.jpg" alt="..." >
                        </div>
                        <div class="font-color">
                            <label>Nome completo do professor</label>
                            <label>Área de especialização</label>
                        </div>
                    </div>
                    <ul>
                        <!--<li class="link">
                            <a href="index.php">
                                <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
                                <span class="hidden-xs hidden-sm">Home</span> 
                            </a>
                        </li>-->
                        <li class="link">
                            <a href="perfil.php">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                <span class="hidden-xs hidden-sm">Perfil</span>
                            </a>
                        </li>
                        <li class="link">
                            <a href="index.php">
                                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                <span class="label label-success pull-right hidden-xs hidden-sm">3</span>
                                <span class="hidden-xs hidden-sm">Mensagens</span>
                           </a>
                        </li>
                        <li class="link">
                            <a href="vinculos.php">
                                <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                                <span class="hidden-xs hidden-sm">Vinculos</span>
                            </a>
                        </li>
                        <li class="link"> <!-- settings-btn -->
                            <a href="orientandos.php">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                <span class="hidden-xs hidden-sm">Orientandos</span>
                            </a>
                        </li>
                    </ul>
                    
                </div>
                <!-- Menu descrições -->
                <div class="col-md-10 col-sm-11 disabled-table-cell valing-top">
                    <div class="row">
                        <header id="nav-header" class="clearfix">
                            <div class="col-md-6">
                                <nav class="navbar-default pull-left">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </nav>
                                <input type="text" class="hidden-sm hidden-xs" id="header-search-field" placeholder="Pesquisar..">
                                <a href="#">
                                    <span class="glyphicon glyphicon-search hidden-xs hidden-sm" aria-hidden="true"></span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <ul class="pull-right">
                                    <li id="welcome" class="hidden-xs">Bem-vindo ao seu perfil.</li>
                                    <li class="fixed-width">
                                        <a href="#">
                                            <span class="glyphicon glyphicon-bell" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Notificações"></span>
                                            <span class="label label-warning">3</span>
                                        </a>
                                    </li>
                                    <li class="fixed-width">
                                        <a href="caixa-mensagens.php">
                                            <span class="glyphicon glyphicon-envelope" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Mensagens"></span>
                                            <span class="label label-messege">3</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../publico/login.php" class="logout">
                                            <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                                            Sair
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </header>
                    </div>
                    <script>
                        $(function () {
                            $('[data-toggle="tooltip"]').tooltip()
                        })
                    </script>