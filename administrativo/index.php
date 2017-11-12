<?php
    include_once 'header.php';
?>
    <head>
        <meta charset="UTF-8">
        <title>Orientando: Painel administrativo</title>
        <link href="" type="text/css" rel="stylesheet">
    </head>
    <div id="content">
        <header class="clearfix">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2 class="page_title pull-left">Home</h2> 
                </div>
            </div>
        </header>
        <!-- Docentes -->
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="content-inner">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-warning">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    Docentes
                                </h4>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="col-md-1">ID</th>
                                                    <th class="">Nome</th>
                                                    <th class="">E-mail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">1</td>
                                                    <td class="">Nome completo do docente</td>
                                                    <td class="">email@email.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">2</td>
                                                    <td class="">Nome completo do docente</td>
                                                    <td class="">email@email.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="">3</td>
                                                    <td class="">Nome completo do docente</td>
                                                    <td class="">email@email.com</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="docentes.php">
                                        <button type="button" class="btn btn-link">Mais</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cursos -->
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="content-inner">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-success">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    Cursos
                                </h4>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="col-md-1">ID</th>
                                                    <th class="">Nome</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">1</td>
                                                    <td class="">Nome do curso</td>
                                                </tr>
                                                <tr>
                                                    <td class="">2</td>
                                                    <td class="">Nome do curso</td>
                                                </tr>
                                                <tr>
                                                    <td class="">3</td>
                                                    <td class="">Nome do curso</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="cursos.php">
                                        <button type="button" class="btn btn-link">Mais</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Administradores -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="content-inner">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-info">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    Orientandos
                                </h4>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="">Docente</th>
                                                    <th class="">Aluno</th>
                                                    <th class="">Tipo</th>
                                                    <th class="">Apresentação</th>
                                                    <th class="">Horário</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">Nome completo do docente</td>
                                                    <td class="">Nome completo do aluno</td>
                                                    <td class=""><span class="label label-info">Qualificação</span></td>
                                                    <td class="">15/06/2017</td>
                                                    <td class="">19:30</td>
                                                </tr>
                                                <tr>
                                                    <td class="">Nome completo do docente</td>
                                                    <td class="">Nome completo do aluno</td>
                                                    <td class=""><span class="label label-info">Qualificação</span></td>
                                                    <td class="">15/06/2017</td>
                                                    <td class="">20:30</td>
                                                </tr>
                                                <tr>
                                                    <td class="">Nome completo do docente</td>
                                                    <td class="">Nome completo do aluno</td>
                                                    <td class=""><span class="label label-primary">Defesa</span></td>
                                                    <td class="">16/06/2017</td>
                                                    <td class="">19:30</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="orientandos.php">
                                        <button type="button" class="btn btn-link">Mais</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    include_once 'footer.php';
?>