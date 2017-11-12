<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Orientando: Login</title>
        <link href="../utilitarios/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="css/login.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="col-md-12">
            <a href="index.php">
                <button type="button" class="btn btn-link btn-back" aria-label="Left Align">
                    <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
                    Voltar a página principal
                </button>
            </a>
        </div>
        <div class="container">
            <div class="col-md-12">
                <h2 class="text-center title">Orientando</h2>
            </div>
            <div class="col-md-12">
                <div class="col-md-6">
                    <img class="center-block" style="width: 200px; height: 200px;" src="../imagens/balon.png" alt="..." >
                </div>
                <div class="col-md-6">
                    <h3 class="text-center">Identificação</h3>
                    <form class="title" action="../docentes/index.php">
                        <input type="text" class="" id="header-search-field" placeholder="Email">
                        <input type="text" class="" id="header-search-field" placeholder="Senha">
                        <input type="submit" class="btn btn-default center-block" id="btn-login" value="Acessar">
                        <input type="submit" class="btn btn-xs btn-link center-block" id="btn-esq-login" value="Esqueceu a senha?">
                    </form>
                </div>
            </div>
        </div>
        
        <!-- JavaScript plugins -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../utilitarios/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>