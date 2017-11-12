<?php
    include_once 'docentes-header.php';
?>
    <!-- Dados acadêmicos -->
    <div class="text-second">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center"><i class="fa fa-fw fa-search"></i> Áreas de pesquisa</h3>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12" align="center">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#dados-academicos" aria-expanded="true" aria-controls="collapseOne">
                                    Campos supervisionados a pesquisa
                                </a>
                            </h4>
                        </div>
                        <div id="dados-academicos" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <table class="table">
                                    <thead>
                                        <th>Áreas</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Descrição</td>
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