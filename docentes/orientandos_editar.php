<?php
    include_once 'header.php';
?>
    <head>
        <meta charset="UTF-8">
        <title>Orientando: Editar orientando</title>
        <link href="css/mensagem.css" type="text/css" rel="stylesheet">
    </head>
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="orientandos.php">Orientando</a></li>
                <li><a href="orientandos_detalhes.php">Detalhes</a></li>
                <li class="active">Editar</li>
            </ol>
        </div>
    </div>
    <div id="content">
        <header class="clearfix">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-xs-10">
                    <h2 class="page_title">Editar orientando</h2> 
                </div>
            </div>
        </header>
    
        <div class="content-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nome completo</label>
                                <input type="text" class="form-control" id="name" placeholder="Nome completo" value="Nome completo do aluno">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" value="email@email.com">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>RA</label>
                                <input type="text" class="form-control" id="ra" placeholder="RA" value="111.111.111-11">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Curso</label>
                                <input type="text" class="form-control" id="curso" placeholder="Email" value="Tecnologia em Análise e Desenvolvimento de Sistemas">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <hr>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Título do projeto</label>
                                <input type="text" class="form-control" id="projeto" placeholder="Título do projeto" value="Título do projeto desenvolvido pelo aluno">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Selecione outro arquivo</label>
                                <input type="file" id="InputFile">
                                <p class="help-block">Caso desejar alterar o documento referente ao projeto.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Vinculação</label>
                                <input type="date" class="form-control" id="data" placeholder="Data" value="07/01/2017">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Status</label>
                                <span class="glyphicon glyphicon-question-sign" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Refere-se ao aluno estar ativo ou não ao vinculo."></span>
                                <select class="form-control">
                                    <option>Ativo</option>
                                    <option>Ausente</option>
                                    <option>Recusado</option>
                                </select> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <hr>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Tipo</label>
                                <select class="form-control">
                                    <option>Qualificação</option>
                                    <option>Defesa</option>
                                    <option>Concluído</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Apresentação</label>
                                <input type="date" class="form-control" id="apresentacao" placeholder="Data apresentação" value="15/06/2017">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Horário</label>
                                <input type="date" class="form-control" id="data" placeholder="Horário apresentação" value="19:30">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Banca de docentes</label></br>
                                <select data-placeholder="Selecione" multiple name="tags" class="form-control chosen-select">
                                    <option></option>
                                    <option>Nome completo do professor 1</option>
                                    <option>Nome completo do professor 2</option>
                                    <option>Nome completo do professor 3</option>
                                </select>
                            </div>
                        </div>
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