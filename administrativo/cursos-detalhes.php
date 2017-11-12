<?php
    include_once 'header.php';
?>
    <head>
        <meta charset="UTF-8">
        <title>Orientando: Detalhes cursos</title>
        <link href="" type="text/css" rel="stylesheet">
    </head>
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="cursos.php">Cursos</a></li>
                <li class="active">Detalhes</li>
            </ol>
        </div>
    </div>
    <div id="content">
        <header class="clearfix">
            <div class="row">
                <div class="col-md-10 col-sm-8 col-xs-8">
                    <h2 class="page_title pull-left">Cursos</h2> 
                </div>
                <div class="col-md-2 col-sm-4 col-xs-4">
                    <div class="pull-right">
                        <a class="btn btn-xs btn-default" href="#" role="button">
                            <form name="imprimir-cursos" action="#" method="POST">
                                <span class="glyphicon glyphicon-print" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="Imprimir"></span>
                            </form> 
                        </a>
                        <a class="btn btn-xs btn-warning" href="cursos-editar.php" role="button">
                            <form name="editar-formacao" action="#" method="POST">
                                <span class="fa fa-edit" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Editar"></span>
                            </form>
                        </a>
                    </div>
                </div>
        </header>
        <div class="content-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="form-group">
                            <label>Nome do curso</label><br>
                            Nome referente ao curso
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label>Duração semestral</label><br>
                            6
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                    <div class="col-md-12">
                        <table class="table table-hover ">
                            <thead>
                                <tr>
                                    <th class="">#</th>
                                    <th class="">Docentes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-md-1">1</td>
                                    <td class="">
                                        Nome completo do docente
                                    </td>
                                </tr>
                                <tr>
                                    <td class="">2</td>
                                    <td class="">
                                        Nome completo do docente
                                    </td>
                                </tr>
                                <tr>
                                    <td class="">3</td>
                                    <td class="">
                                        Nome completo do docente
                                    </td>
                                </tr>
                            </tbody>
                        </table> 
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    include_once 'footer.php';
?>