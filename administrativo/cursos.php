<?php
    include_once 'header.php';
?>
    <head>
        <meta charset="UTF-8">
        <title>Orientando: Cursos</title>
        <link href="" type="text/css" rel="stylesheet">
    </head>
    <div id="content">
        <header class="clearfix">
            <div class="row">
                <div class="col-md-10 col-sm-8 col-xs-8">
                    <h2 class="page_title pull-left">Cursos</h2> 
                </div>
                <div class="col-md-2 col-sm-4 col-xs-4">
                    <div class="pull-right">
                        <a class="btn btn-xs btn-danger" href="#" role="button" data-toggle="modal" data-target="#myModal">
                            <form name="excluir-cursos" action="#" method="POST">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="Excluir"></span>
                            </form> 
                        </a>
                        <a class="btn btn-xs btn-default" href="#" role="button">
                            <form name="imprimir-cursos" action="#" method="POST">
                                <span class="glyphicon glyphicon-print" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Imprimir"></span>
                            </form>
                        </a>
                        <a class="btn btn-xs btn-info" href="#" role="button" data-toggle="modal" data-target=".bs-example-modal-lg">
                            <form name="inserir-cursos" action="#" method="POST">
                                <span class="glyphicon glyphicon-new-window" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Novo"></span>
                            </form>
                        </a>
                        
                    </div>
                </div>
            </div>
        </header>
        <div class="content-inner">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="col-md-1"></th>
                                <th class="col-md-1">ID</th>
                                <th class="">Nome</th>
                                <th class="col-md-2">Duração semestral</th>
                                <th class="">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="">
                                    <input type="checkbox" id="blankCheckbox" value="option1" aria-label="">
                                </td>
                                <td class="">1</td>
                                <td class="">Nome do curso</td>
                                <td class="">6</td>
                                <td class="col-md-2">
                                    <a class="btn btn-xs btn-primary" href="cursos-detalhes.php" role="button">
                                        <form name="vizualizar-formacao" action="#" method="POST">
                                            <span class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Vizualizar"></span>
                                        </form>
                                    </a>
                                    <a class="btn btn-xs btn-warning" href="cursos-editar.php" role="button">
                                        <form name="editar-formacao" action="#" method="POST">
                                            <span class="fa fa-edit" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Editar"></span>
                                        </form>
                                    </a>
                                    <a class="btn btn-xs btn-danger" href="#" role="button" data-toggle="modal" data-target="#myModal">
                                        <form name="excluir-formacao" action="#" method="POST">
                                            <span class="fa fa-trash" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Excluir"></span>
                                        </form>
                                    </a>
                                </td>	
                            </tr>
                            <tr>
                                <td class="">
                                    <input type="checkbox" id="blankCheckbox" value="option1" aria-label="">
                                </td>
                                <td class="">2</td>
                                <td class="">Nome do curso</td>
                                <td class="">6</td>
                                <td class="col-md-2">
                                    <a class="btn btn-xs btn-primary" href="#" role="button">
                                        <form name="vizualizar-formacao" action="#" method="POST">
                                            <span class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Vizualizar"></span>
                                        </form>
                                    </a>
                                    <a class="btn btn-xs btn-warning" href="#" role="button">
                                        <form name="editar-formacao" action="#" method="POST">
                                            <span class="fa fa-edit" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Editar"></span>
                                        </form>
                                    </a>
                                    <a class="btn btn-xs btn-danger" href="#" role="button" data-toggle="modal" data-target="#myModal">
                                        <form name="excluir-formacao" action="#" method="POST">
                                            <span class="fa fa-trash" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Excluir"></span>
                                        </form>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <input type="checkbox" id="blankCheckbox" value="option1" aria-label="">
                                </td>
                                <td class="">3</td>
                                <td class="">Nome do curso</td>
                                <td class="">6</td>
                                <td class="col-md-2">
                                    <a class="btn btn-xs btn-primary" href="#" role="button">
                                        <form name="vizualizar-formacao" action="#" method="POST">
                                            <span class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Vizualizar"></span>
                                        </form>
                                    </a>
                                    <a class="btn btn-xs btn-warning" href="#" role="button">
                                        <form name="editar-formacao" action="#" method="POST">
                                            <span class="fa fa-edit" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Editar"></span>
                                        </form>
                                    </a>
                                    <a class="btn btn-xs btn-danger" href="#" role="button" data-toggle="modal" data-target="#myModal">
                                        <form name="excluir-formacao" action="#" method="POST">
                                            <span class="fa fa-trash" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Excluir"></span>
                                        </form>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Excluir Docentes -->
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
        <!-- Novo usuario -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div id="content">
                        <header>
                            <h1 class="page_title">Cadastro de curso</h1>
                        </header>
                        <div class="content-inner">
                            <div class="form-wrapper">
                                <div class="row">
                                    <form name="novo-vinculo" action="" method="POST">
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nome</label>
                                                    <input type="text" class="form-control" id="name" placeholder="Nome" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Duração semestral</label>
                                                    <input type="number" class="form-control" id="duracao-semestral" placeholder="Duração semestral" value="">
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