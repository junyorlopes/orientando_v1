<?php
    include_once 'header.php';
?>
    <head>
        <meta charset="UTF-8">
        <title>Orientando: Mensagens</title>
        <link href="css/caixa-mensagens.css" type="text/css" rel="stylesheet">
        <link href="css/nova-mensagem.css" type="text/css" rel="stylesheet">
    </head>
    <div id="content">
        <header class="clearfix">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-xs-10">
                    <h2 class="page_title pull-left">Mensagens</h2> 
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="pull-right">
                        <a class="btn btn-xs btn-danger" href="#" role="button" data-toggle="modal" data-target="#myModal">
                            <form name="excluir-mensagem" action="#" method="POST">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="Excluir"></span>
                            </form> 
                        </a>
                        <a class="btn btn-xs btn-info" href="#" role="button" data-toggle="modal" data-target=".bs-example-modal-lg">
                            <form name="excluir-mensagem" action="#" method="POST">
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
                        <input type="text" class="form-control" id="search" placeholder="Pesquise por uma mensagem">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-primary">Pesquisar</button>
                        </span>
                    </div>
                </div>
            </div>
            <hr>  
            <div class="row article-row">
                <div class="col-xs-2 col-sm-1 col-md-1 text-center">
                    <div class="article-actions text-center status-padding">
                        <input type="checkbox" id="blankCheckbox" value="option1" aria-label="">
                    </div>
                </div>
                <div class="col-xs-2 col-sm-1 col-md-1 status-padding">
                    <span class="label label-warning">Pendente</span>
                </div>
                <div class="col-xs-9 col-sm-5 col-md-3 article-title pull-left">
                    <form name="emails" action="#" method="POST">
                        <p><b><h5>Nome completo do aluno</h5></b></p>
                        <small>23 de dezembro de 2016.</small>
                    </form>
                </div>
                <div class="col-xs-9 col-sm-5 col-md-5 article-title col-xs-offset-2 col-sm-offset-0 col-md-offset-0 col-lg-offset-0">
                    <form name="emails" action="mensagem.php" method="POST">
                        <p><b><input type="submit" value="Título da mensagem" name="btEmail" class="btn btn-link"></b></p>
                    </form>
                </div>
                <div class="col-xs-10 col-sm-5 col-md-2 col-xs-offset-2 col-sm-offset-0 col-md-offset-0 col-lg-offset-0">
                    <div class="article-actions status-padding">
                        <a class="btn btn-xs btn-default" href="#" role="button">
                            <form name="vizualizar-email" action="#" method="POST">
                                <span class="glyphicon glyphicon-folder-open" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="Abrir"></span>
                            </form>
                        </a>
                        <a class="btn btn-xs btn-default" href="#" role="button" data-toggle="modal" data-target="#myModal">
                            <form name="excluir-email" action="#" method="POST">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Apagar"></span>
                            </form>
                        </a>
                    </div>
                </div>
            </div>
            <hr>
            <!-- Exemplos -->
            <div class="row article-row">
                <div class="col-xs-2 col-sm-1 col-md-1 text-center">
                    <div class="article-actions text-center status-padding">
                        <input type="checkbox" id="blankCheckbox" value="option1" aria-label="">
                    </div>
                </div>
                <div class="col-xs-2 col-sm-1 col-md-1 status-padding">
                    <span class="label label-success">Respondido</span>
                </div>
                <div class="col-xs-9 col-sm-5 col-md-3 article-title pull-left">
                    <form name="emails" action="#" method="POST">
                        <p><b><h5>Nome completo do aluno</h5></b></p>
                        <small>23 de dezembro de 2016.</small>
                    </form>
                </div>
                <div class="col-xs-9 col-sm-5 col-md-5 article-title col-xs-offset-2 col-sm-offset-0 col-md-offset-0 col-lg-offset-0">
                    <form name="emails" action="#" method="POST">
                        <p><b><input type="submit" value="Título da mensagem" name="btEmail" class="btn btn-link"></b></p>
                    </form>
                </div>
                <div class="col-xs-10 col-sm-5 col-md-2 col-xs-offset-2 col-sm-offset-0 col-md-offset-0 col-lg-offset-0">
                    <div class="article-actions status-padding">
                        <a class="btn btn-xs btn-default" href="#" role="button">
                            <form name="vizualizar-email" action="#" method="POST">
                                <span class="glyphicon glyphicon-folder-open" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="Abrir"></span>
                            </form>
                        </a>
                        <a class="btn btn-xs btn-default" href="#" role="button">
                            <form name="excluir-email" action="#" method="POST" data-toggle="modal" data-target="#myModal">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Apagar"></span>
                            </form>
                        </a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row article-row">
                <div class="col-xs-2 col-sm-1 col-md-1 text-center">
                    <div class="article-actions text-center status-padding">
                        <input type="checkbox" id="blankCheckbox" value="option1" aria-label="">
                    </div>
                </div>
                <div class="col-xs-2 col-sm-1 col-md-1 status-padding">
                    <span class="label label-success">Respondido</span>
                </div>
                <div class="col-xs-9 col-sm-5 col-md-3 article-title pull-left">
                    <form name="emails" action="#" method="POST">
                        <p><b><h5>Nome completo do aluno</h5></b></p>
                        <small>23 de dezembro de 2016.</small>
                    </form>
                </div>
                <div class="col-xs-9 col-sm-5 col-md-5 article-title col-xs-offset-2 col-sm-offset-0 col-md-offset-0 col-lg-offset-0">
                    <form name="emails" action="#" method="POST">
                        <p><b><input type="submit" value="Título da mensagem" name="btEmail" class="btn btn-link"></b></p>
                    </form>
                </div>
                <div class="col-xs-10 col-sm-5 col-md-2 col-xs-offset-2 col-sm-offset-0 col-md-offset-0 col-lg-offset-0">
                    <div class="article-actions status-padding">
                        <a class="btn btn-xs btn-default" href="#" role="button">
                            <form name="vizualizar-email" action="#" method="POST">
                                <span class="glyphicon glyphicon-folder-open" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="Abrir"></span>
                            </form>
                        </a>
                        <a class="btn btn-xs btn-default" href="#" role="button">
                            <form name="excluir-email" action="#" method="POST" data-toggle="modal" data-target="#myModal">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Apagar"></span>
                            </form>
                        </a>
                    </div>
                </div>
            </div>
            <hr>

            <!-- Nova mensagem -->
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div id="content">
                            <header>
                                <h1 class="page_title">Nova mensagem</h1>
                            </header>
                            <div class="content-inner">
                                <div class="form-wrapper">
                                    <form>
                                        <div class="form-group">
                                            <label class="sr-only">Destinatário</label>
                                            <input type="text" class="form-control" id="title" placeholder="Destinatário">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only">Assunto</label>
                                            <input type="text" class="form-control" id="title" placeholder="Assunto">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only">Mensagem</label>
                                            <textarea class="form-control summernote" placeholder="Escreva aqui a sua mensagem" name="mensagem"></textarea>
                                        </div>
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            <h1 class="page_title">Deseja anexar algum documento ao email?</h1>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                        <div class="control-group">
                                                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                                                <label>Anexos:</label>
                                                                <input type="file" class="form-control" name="doc" placeholder="doc" id="doc">
                                                                <p class="help-block text-danger"></p>
                                                            </div>
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
            <!-- Modal Excluir Emails -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Atenção!</h4>
                        </div>
                        <div class="modal-body">
                            Esta exclusão será permanente. Deseja prosseguir?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                          <button type="button" class="btn btn-danger">Sim</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                include_once 'paginacao.php';
            ?>
        </div>
    </div>
<?php
    include_once 'footer.php';
?>