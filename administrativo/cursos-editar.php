<?php
    include_once 'header.php';
?>
    <head>
        <meta charset="UTF-8">
        <title>Orientando: Editar curso</title>
        <link href="css/mensagem.css" type="text/css" rel="stylesheet">
    </head>
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="cursos.php">Cursos</a></li>
                <li><a href="cursos-detalhes.php">Detalhes</a></li>
                <li class="active">Editar</li>
            </ol>
        </div>
    </div>
    <div id="content">
        <header class="clearfix">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-xs-10">
                    <h2 class="page_title">Editar curso</h2> 
                </div>
            </div>
        </header>
        <div class="content-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Nome do curso</label>
                            <input type="text" class="form-control" id="name" placeholder="Nome do curso" value="Nome referente ao curso">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Duração semestral</label>
                            <input type="number" class="form-control" id="name" placeholder="Duração semestral" value="6">
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <hr>
                        <label>Insira um docentes</label>
                        <div class="form-inline">
                            <input type="text" style="width: 500px;" class="form-control" name="docentes-pesquisa" placeholder="Docentes" value="">
                            <button class="btn btn-success" type="submit">Inserir</button>
                            <button class="btn btn-default" type="submit">Limpar</button>
                        </div>
                    </div>
                    <div class="col-md-12 break-text">
                        <table class="table table-hover ">
                            <thead>
                                <tr>
                                    <th class="">#</th>
                                    <th class="">Docentes vinculados ao curso</th>
                                    <th class="text-center">Excluir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-md-1">1</td>
                                    <td class="">
                                        Nome completo do docente
                                    </td>
                                    <td class="col-md-1 text-center">
                                        <a class="btn btn-xs btn-danger" href="orientandos_editar.php" role="button">
                                            <form name="excluir-formacao" action="#" method="POST">
                                                <span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Excluir"></span>
                                            </form>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="">2</td>
                                    <td class="">
                                        Nome completo do docente
                                    </td>
                                    <td class="col-md-1 text-center">
                                        <a class="btn btn-xs btn-danger" href="orientandos_editar.php" role="button">
                                            <form name="excluir-formacao" action="#" method="POST">
                                                <span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Excluir"></span>
                                            </form>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="">3</td>
                                    <td class="">
                                        Nome completo do docente
                                    </td>
                                    <td class="col-md-1 text-center">
                                        <a class="btn btn-xs btn-danger" href="orientandos_editar.php" role="button">
                                            <form name="excluir-formacao" action="#" method="POST">
                                                <span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Excluir"></span>
                                            </form>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table> 
                    </div>
                    <div class="col-md-12">
                        <div class="clearfix pull-right">
                            </br>
                            <form name="editar-vinculo" action="nova-mensagem.php" method="POST">
                                <button type="submit" class="btn btn-default">Voltar</button>
                                <button type="submit" class="btn btn-warning">Editar</button> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    include_once 'footer.php';
?>