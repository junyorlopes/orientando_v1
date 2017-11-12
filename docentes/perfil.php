<?php
    include_once 'header.php';
?>
    <head>
        <meta charset="UTF-8">
        <title>Orientando: Perfil</title>
    </head>
    <div id="content">
        <header class="clearfix">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-xs-10">
                    <h2 class="page_title">Perfil</h2> 
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2 ">
                    <div class="article-actions status-padding pull-right">
                        <a class="btn btn-xs btn-default" href="../publico/docentes-dados-academicos.php" target="_blank" role="button">
                            <form name="vizualizar-perfil" action="" method="POST">
                                <span class="glyphicon glyphicon-globe" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="Vizualizar perfil como usuário"></span>
                            </form> 
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="content-inner">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="col-sm-10 col-md-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-stacked nav-justified" role="tablist">
                            <li class="active" role="presentation"><a href="#dados-pessoais" aria-controls="home" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-user"></i> Dados pessoais</a></li>
                            <li class="" role="presentation"><a href="#dados-academicos" aria-controls="profile" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-book"></i> Dados acadêmicos</a></li>
                        </ul>
                        <!-- Dados pessoais -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="dados-pessoais">
                                </br></br>
                                <div class="col-md-12">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Nome completo</label>
                                            <input type="text" class="form-control" name="nome" placeholder="Nome Completo" value="Nome completo do professor">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="nome" placeholder="Nome Completo" value="email@email.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Senha</label>
                                            <input type="password" class="form-control" name="nome" placeholder="Senha" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Confirmar senha</label>
                                            <input type="password" class="form-control" name="nome" placeholder="Confirmar senha" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Imagem</label>
                                            <input type="file" id="InputFile">
                                            <p class="help-block">Caso desejar alterar sua imagem do perfil.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <!-- Dados acadêmicos -->
                            <div role="tabpanel" class="tab-pane" id="dados-academicos">
                                </br></br>
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Titulação</label>
                                            <span class="glyphicon glyphicon-question-sign" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Ex: MSc Engenharia de Sofware, Dr. Engenharia Agrônomo, etc."></span>
                                            <input type="text" class="form-control" name="nome" placeholder="Titulação" value="MSc Engenharia de Sofware">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Curso(s) a lecionar</label>
                                            <select data-placeholder="Selecione" multiple name="tags" class="form-control chosen-select">
                                                <option></option>
                                                <option>Curso 1</option>
                                                <option>Curso 2</option>
                                                <option>Curso 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Nível acadêmico</label>
                                            <select class="form-control" name="nivel-academico" id="nivel-academico" >
                                                <option value="Graduação">Técnico</option>
                                                <option value="Graduação">Graduação</option>
                                                <option value="Doutorado">Pós-graduação</option>
                                                <option value="Mestrado">Mestrado</option>
                                                <option value="Doutorado">Doutorado</option>
                                                <option value="Doutorado">Pós-doutorado</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Data</label>
                                            <input type="date" class="form-control" name="data" placeholder="Data" value="20/12/2010">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Curso</label>
                                            <input type="text" class="form-control" name="curso" placeholder="Curso" value="Tecnologia em Análise e Desenvolvimento de Sistemas">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Instituição</label>
                                            <input type="text" class="form-control" name="instituicao" placeholder="Instituição" value="Faculdade de Tecnologia de Presidente Prudente - Fatec">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group status-padding"></br>
                                            <button class="btn btn-success" type="submit">Inserir</button>
                                            <button class="btn btn-default" type="submit">Limpar</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <label>Formações:</label>
                                        <div class="clearfix well">
                                            <div class="col-md-11 col-sm-11 col-xs-11">
                                                <p><b>Nível acadêmico:</b> Graduação</p>
                                                <p><b>Data:</b> 20/12/2010</p>
                                                <p><b>Curso:</b> Tecnologia em Análise e Desenvolvimento de Sistemas</p>
                                                <p><b>Instituição:</b> Faculdade de Tecnologia de Presidente Prudente - Fatec</p>
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <div class="article-actions status-padding pull-right">
                                                    <a class="btn btn-xs btn-danger" href="orientandos_editar.php" role="button">
                                                        <form name="excluir-formacao" action="#" method="POST">
                                                            <span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Excluir"></span>
                                                        </form>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Campos de Pesquisa</label>
                                            <input type="text" class="form-control" name="campos-pesquisa" placeholder="Campos de Pesquisa" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group status-padding"></br>
                                            <button class="btn btn-success" type="submit">Inserir</button>
                                            <button class="btn btn-default" type="submit">Limpar</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <label>Áreas:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="clearfix well">
                                                <div class="col-md-11">
                                                    <p><b>Engenharia de Software</b></p>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="article-actions status-padding pull-right">
                                                        <a class="btn btn-xs btn-danger" href="orientandos_editar.php" role="button">
                                                            <form name="excluir-formacao" action="#" method="POST">
                                                                <span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Excluir"></span>
                                                            </form>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Exemplos -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="clearfix well">
                                                <div class="col-md-11">
                                                    <p><b>Programação Orientada a Objetos</b></p>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="article-actions status-padding pull-right">
                                                        <a class="btn btn-xs btn-danger" href="orientandos_editar.php" role="button">
                                                            <form name="excluir-formacao" action="#" method="POST">
                                                                <span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Excluir"></span>
                                                            </form>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="clearfix well">
                                                <div class="col-md-11">
                                                    <p><b>Servidores Linux</b></p>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="article-actions status-padding pull-right">
                                                        <a class="btn btn-xs btn-danger" href="orientandos_editar.php" role="button">
                                                            <form name="excluir-formacao" action="#" method="POST">
                                                                <span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Excluir"></span>
                                                            </form>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <div class="clearfix pull-right">
                                <form name="alterar-dados-docente" class="form-horizontal" id="add" method="POST" action="#" enctype="multipart/form-data">
                                    <button type="submit" class="btn btn-default">Voltar</button>
                                    <button type="submit" class="btn btn-warning">Alterar</button> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Fim tab -->     
        </div>
    </div>
<?php
    include_once 'footer.php';
?>