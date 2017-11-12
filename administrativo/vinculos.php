<!DOCTYPE html>
<?php 
    include_once 'header.php';
?>
    <head>
        <meta charset="UTF-8">
        <title>Orientando: Vinculos</title>
    </head>
    <div id="content">
        <header class="clearfix">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-xs-10">
                    <h2 class="page_title pull-left">Vinculos</h2> 
                </div>
               <div class="col-md-2 col-sm-2 col-xs-2 ">
                    <div class="article-actions status-padding pull-right">
                        <a class="btn btn-xs btn-default" href="#" role="button">
                            <form name="imprimir-vinculos" action="#" method="POST">
                                <span class="glyphicon glyphicon-print" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="Imprimir"></span>
                            </form> 
                        </a>
                        <a name="btMensagem" data-toggle="modal" data-target=".bs-example-modal-lg" class="btn btn-xs btn-info" href="" role="button">
                            <form name="novo-vinculos" action="#" method="POST">
                                <span class="glyphicon glyphicon-new-window" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Novo"></span>
                            </form>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="content-inner">
            <div class="row search-row">
                <div class="col-md-12">
                    <div class="input-group">
                        <input type="text" class="form-control" id="search" placeholder="Pesquise por um vinculo">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-primary">Pesquisar</button>
                        </span>
                    </div>
                </div>
            </div>
            <hr> 
            <div class="row comments-row">
                <div class="col-sm-10 col-md-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-stacked nav-justified" role="tablist">
                        <li class="active" role="presentation"><a href="#todos" aria-controls="home" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-asterisk"></i> Todos</a></li>
                        <li class="" role="presentation"><a href="#ativos" aria-controls="profile" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-thumbs-up"></i> Ativos</a></li>
                        <li class="" role="presentation"><a href="#recusados" aria-controls="messages" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-thumbs-down"></i> Recusados</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="todos">
                            </br>
                            </br>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Docente</th>
                                        <th>Aluno</th>
                                        <th>Tema</th>
                                        <th>Status</th>
                                        <th>Data</th>
                                        <th>Mais detalhes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nome completo do docente</td>
                                        <td>Nome completo do aluno</td>
                                        <td>Tema do projeto do aluno</td>
                                        <td>
                                            <span class="label label-success">Ativo</span>
                                        </td>
                                        <td>07/01/2017</td>
                                        <td>
                                            <form name="orientandos-detalhes" action="orientandos_detalhes.php" method="POST">
                                                <input type="submit" value="Detalhes" name="btMensagem" data-toggle="modal" data-target=".bs-example-modal-lg" class="btn btn-link">
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nome completo do docente</td>
                                        <td>Nome completo do aluno</td>
                                        <td>Tema do projeto do aluno</td>
                                        <td>
                                            <span class="label label-danger">Recusado</span>
                                        </td>
                                        <td>07/01/2017</td>
                                        <td>
                                            <input type="submit" value="Detalhes" name="btMensagem" data-toggle="modal" data-target=".bs-example-modal-lg" class="btn btn-link">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <!-- Ativos -->
                        <div role="tabpanel" class="tab-pane" id="ativos">
                        </br>
                            </br>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Docente</th>
                                        <th>Aluno</th>
                                        <th>Tema</th>
                                        <th>Status</th>
                                        <th>Data</th>
                                        <th>Mais detalhes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nome completo do docente</td>
                                        <td>Nome completo do aluno</td>
                                        <td>Tema do projeto do aluno</td>
                                        <td>
                                            <span class="label label-success">Ativo</span>
                                        </td>
                                        <td>07/01/2017</td>
                                        <td>
                                            <input type="submit" value="Detalhes" name="btMensagem" data-toggle="modal" data-target=".bs-example-modal-lg" class="btn btn-link">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <!-- Recusados -->
                        <div role="tabpanel" class="tab-pane" id="recusados">
                            </br>
                            </br>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Docente</th>
                                        <th>Aluno</th>
                                        <th>Tema</th>
                                        <th>Status</th>
                                        <th>Data</th>
                                        <th>Mais detalhes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nome completo do docente</td>
                                        <td>Nome completo do aluno</td>
                                        <td>Tema do projeto do aluno</td>
                                        <td>
                                            <span class="label label-danger">Recusado</span>
                                        </td>
                                        <td>07/01/2017</td>
                                        <td>
                                            <input type="submit" value="Detalhes" name="btMensagem" data-toggle="modal" data-target=".bs-example-modal-lg" class="btn btn-link">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- Fim tab -->
            </div>
        </div>
    </div>
    <!-- Novo vinculo -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div id="content">
                    <header>
                        <h1 class="page_title">Novo vinculo</h1>
                    </header>
                    <div class="content-inner">
                        <div class="form-wrapper">
                            <div class="row">
                                <form name="novo-vinculo" action="" method="POST">
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nome completo</label>
                                                    <input type="text" class="form-control" id="name" placeholder="Nome completo" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>RA</label>
                                                    <input type="text" class="form-control" id="ra" placeholder="Ra" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Data</label>
                                                    <input type="date" class="form-control" id="ra" placeholder="Data" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" id="email" placeholder="Email" value="">
                                                </div>
                                            </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Curso</label>
                                                    <select class="form-control">
                                                        <option>Curso 1</option>
                                                        <option>Curso 2</option>
                                                        <option>Curso 3</option>
                                                        <option>Curso 4</option>
                                                        <option>Curso 5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <hr>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Título do projeto</label>
                                                    <input type="text" class="form-control" id="title-project" placeholder="Email" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Selecione arquivo</label>
                                                    <input type="file" id="InputFile">
                                                    <p class="help-block">Documento referente ao pré-projeto.</p>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Tipo</label>
                                                    <select class="form-control">
                                                        <option>Qualificação</option>
                                                        <option>Defesa</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <div class="alert alert-success">
                                                        <div class="clearfix">
                                                            <label>Vinculo aprovado.</label>
                                                        </div>
                                                    </div>
                                                    </br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-success">Enviar</button>
                            </div>
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