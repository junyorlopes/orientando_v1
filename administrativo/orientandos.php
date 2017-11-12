<?php
    include_once 'header.php';
?>
    <head>
        <meta charset="UTF-8">
        <title>Orientando: Orientandos</title>
    </head>
    <div id="content">
        <header class="clearfix">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-xs-10">
                    <h2 class="page_title pull-left">Orientandos</h2> 
                </div>
               <div class="col-md-2 col-sm-2 col-xs-2 ">
                    <div class="article-actions status-padding pull-right">
                        <a class="btn btn-xs btn-default" href="#" role="button">
                            <form name="imprimir-orientandos" action="#" method="POST">
                                <span class="glyphicon glyphicon-print" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="Imprimir"></span>
                            </form> 
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="content-inner theme-showcase">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Docente</th>
                                <th>Aluno</th>
                                <th>Tema</th>
                                <th>Tipo</th>
                                <th>Apresentação</th>
                                <th>Horário</th>
                                <th>Mais detalhes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Nome completo do docente</td>
                                <td>Nome completo do aluno</td>
                                <td>Tema do projeto do aluno</td>
                                <td>
                                    <span class="label label-info">Qualificação</span>
                                </td>
                                <td>
                                    15/06/2017
                                </td>
                                <td>
                                    19:30
                                </td>
                                <td>
                                    <form name="vinculos-detalhes" action="orientandos_detalhes.php" method="POST">
                                        <input type="submit" value="Detalhes" name="btMensagem" data-toggle="modal" data-target=".bs-example-modal-lg" class="btn btn-link">
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nome completo do docente</td>
                                <td>Nome completo do aluno</td>
                                <td>Tema do projeto do aluno</td>
                                <td>
                                    <span class="label label-primary">Defesa</span>
                                </td>
                                <td>
                                    16/06/2017
                                </td>
                                <td>
                                    20:15
                                </td>
                                <td>
                                    <form name="vinculos-detalhes" action="orientandos_detalhes.php" method="POST">
                                        <input type="submit" value="Detalhes" name="btMensagem" data-toggle="modal" data-target=".bs-example-modal-lg" class="btn btn-link">
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
               
        </div>
        </div>
<?php
    include_once 'footer.php';
?>