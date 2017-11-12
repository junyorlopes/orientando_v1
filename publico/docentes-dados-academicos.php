<?php
    include_once 'docentes-header.php';
?>
    <!-- Dados acadêmicos -->
    <div class="text-second">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center"><i class="fa fa-fw fa-graduation-cap"></i> Dados acadêmicos</h3>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12" align="center">
                <!-- Graduações -->
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#graduacao" aria-expanded="true" aria-controls="collapseOne">
                                    Graduação
                                </a>
                            </h4>
                        </div>
                        <div id="graduacao" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <table class="table">
                                    <thead>
                                        <th>Curso</th>
                                        <th>Instituição</th>
                                        <th>Data</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nome do curso</td>
                                            <td>Nome da instituição</td>
                                            <td>Data da formação</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                </div>
                <!-- Pós-graduações -->
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#pos-graduacao" aria-expanded="true" aria-controls="collapseOne">
                                    Pós-graduação
                                </a>
                            </h4>
                        </div>
                        <div id="pos-graduacao" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <table class="table">
                                    <thead>
                                        <th>Curso</th>
                                        <th>Instituição</th>
                                        <th>Data</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nome do curso</td>
                                            <td>Nome da instituição</td>
                                            <td>Data da formação</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                </div>
                <!-- Mestrados -->
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#mestrado" aria-expanded="true" aria-controls="collapseOne">
                                    Mestrado
                                </a>
                            </h4>
                        </div>
                        <div id="mestrado" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <table class="table">
                                    <thead>
                                        <th>Curso</th>
                                        <th>Instituição</th>
                                        <th>Data</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nome do curso</td>
                                            <td>Nome da instituição</td>
                                            <td>Data da formação</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                </div>
                <!-- Doutorados -->
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#doutorado" aria-expanded="true" aria-controls="collapseOne">
                                    Doutorado
                                </a>
                            </h4>
                        </div>
                        <div id="doutorado" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <table class="table">
                                    <thead>
                                        <th>Curso</th>
                                        <th>Instituição</th>
                                        <th>Data</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nome do curso</td>
                                            <td>Nome da instituição</td>
                                            <td>Data da formação</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                </div>
                <!-- Outros -->
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#outros" aria-expanded="true" aria-controls="collapseOne">
                                    Outros
                                </a>
                            </h4>
                        </div>
                        <div id="outros" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <table class="table">
                                    <thead>
                                        <th>Curso</th>
                                        <th>Instituição</th>
                                        <th>Data</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nome do curso</td>
                                            <td>Nome da instituição</td>
                                            <td>Data da formação</td>
                                        </tr>
                                    </tbody>
                                </table>
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