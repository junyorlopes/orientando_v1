<?php
    include_once 'header.php';
?>
    <head>
        <meta charset="UTF-8">
        <title>Orientando: Detalhes orientando</title>
        <link href="css/mensagem.css" type="text/css" rel="stylesheet">
    </head>
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="orientandos.php">Orientando</a></li>
                <li class="active">Detalhes</li>
            </ol>
        </div>
    </div>
    <div id="content">
        <header class="clearfix">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-xs-10">
                    <h2 class="page_title">Detalhes do orientando</h2> 
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2 ">
                    <div class="article-actions status-padding pull-right">
                        <a class="btn btn-xs btn-default" href="#" role="button">
                            <form name="vizualizar-email" action="#" method="POST">
                                <span class="glyphicon glyphicon-print" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="Imprimir"></span>
                            </form> 
                        </a>
                        <a class="btn btn-xs btn-warning" href="orientandos_editar.php" role="button">
                            <form name="excluir-email" action="#" method="POST">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Editar"></span>
                            </form>
                        </a>
                    </div>
                </div>
            </div>
        </header>
    
        <div class="content-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nome completo</label></br>
                                Nome completo do aluno
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label></br>
                                email@email.com
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>RA</label></br>
                                111.111.111-11
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Curso</label></br>
                                Tecnologia em Análise e Desenvolvimento de Sistemas
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <hr>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Título do projeto</label></br>
                                Título do projeto desenvolvido pelo aluno
                            </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                              <label>Projeto</label></br>
                              <input type="submit" value="Download" name="btMensagem" data-toggle="modal" data-target=".bs-example-modal-lg" class="btn btn-link">
                          </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Vinculação</label></br>
                                07/01/2017
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Status</label>
                                <span class="glyphicon glyphicon-question-sign" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Refere-se ao aluno estar ativo ou não ao vinculo."></span>
                                </br>
                                <span class="label label-success">Ativo</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <hr>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Tipo</label></br>
                                <span class="label label-info">Qualificação</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Apresentação</label></br>
                                15/06/2017
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Horário</label></br>
                                19:30
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Banca de docentes</label></br>
                                Nome completo do professor 1</br>
                                Nome completo do professor 2</br>
                                Nome completo do professor 3
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