<!DOCTYPE html>
<?php
    include_once 'header.php';
?>
    <head>
        <meta charset="UTF-8">
        <title>Orientando: Mensagens</title>
        <link href="css/mensagem.css" type="text/css" rel="stylesheet">
    </head>
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="caixa-mensagens.php">Caixa de mensagens</a></li>
                <li class="active">Mensagem</li>
            </ol>
        </div>
    </div>
    <div id="content">
        <header class="clearfix">
            <h2 class="page_title pull-left">Título da mensagem</h2>
        </header>
        <div class="content-inner">
            <div class="row comments-row">
                <div class="col-sm-2 col-md-1">
                    <img class="img-circle" style="height: 75px; width: 75px;" src="../imagens/discente.png">
                </div>
                <div class="col-sm-10 col-md-11">
                    <div class="row">
                        <div class="col-sm-10 col-md-9">
                            <b>Nome do aluno</b></br>
                            <small>Quinta-feira, 13:50 - 23/12/2016</small>
                        </div>
                        <div class="col-sm-2 col-md-3">
                            <div class="clearfix">
                                <div class="pull-right comment-age">
                                    6 dias atrás
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="well comments-well">
                                <p>Assunto referente a mensagem enviada do estudante ao docente que deseja concretizar o vinculo. 
                                Junto com a mensagem está o "pré-projeto", que após uma análise do docente o aluno receberá uma resposta,
                                caso o vinculo seja concretizado ou não.</p>
                                <p><i>Para realizar o download do documento clique no botão abaixo:</i></p>
                                <a class="btn btn-primary" role="button" href="#" aria-expanded="false">Download</a>
                                <div class="clearfix">
                                    <div class="pull-right">
                                        <a class="glyphicon glyphicon-thumbs-up btn btn-sm btn-success" role="button" data-toggle="collapse" href="#collapseEfetivar" aria-expanded="false" aria-controls="collapseExample" aria-hidden="true"></a>   
                                        <a class="glyphicon glyphicon-thumbs-down btn btn-sm btn-danger" role="button" data-toggle="collapse" href="#collapseReprovar" aria-expanded="false" aria-controls="collapseExample" aria-hidden="true"></a>   
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-success collapse" role="alert" id="collapseEfetivar">
                                <div class="clearfix">
                                    <label>Este pedido de vinculo foi aprovado.</label>
                                </div>
                            </div>
                            <div class="alert alert-danger collapse" role="alert" id="collapseReprovar">
                                <div class="clearfix">
                                    <label>Este pedido de vinculo foi reprovado.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row comments-row">
                <div class="col-md-11">
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                            <div class="clearfix">
                                <div class="pull-right">
                                    <b>Nome do professor</b></br>
                                    <small>Quinta-feira, 15:50 - 23/12/2016</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="well comments-well box">
                                <p>Resposta referente a mensagem enviada do estudante ao docente que deseja concretizar o vinculo, 
                                que após uma análise do docente o aluno receberá uma resposta.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <img class="img-circle" style="height: 75px; width: 75px;" src="../imagens/docente.png">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-9">
                    <div class="clearfix">
                        <div class="form-group">
                            <label class="sr-only">Mensagem</label>
                            <textarea class="form-control summernote" placeholder="Escreva aqui a sua mensagem" name="mensagem"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <form name="enviar-email" action="#" method="POST">
                        <button type="button" class="btn btn-lg btn-success" aria-label="Left Align">Enviar</button>
                    </form>  
                </div>
            </div>
        </div>
    </div>
<?php
    include_once 'footer.php';
?>