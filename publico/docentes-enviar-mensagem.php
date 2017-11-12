<?php
    include_once 'docentes-header.php';
?>
    <head>
        <link href="css/enviar-mensagem.css" type="text/css" rel="stylesheet">
    </head>
    <div class="text-second">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center"><i class="fa fa-fw fa-send"></i> Enviar uma mensagem</h3>
            </div>
        </div>
        <br>
        <div class="">
            <form class="" action="#">
                <label class="label-position">Dados pessoais</label>
                <input type="text" class="header-search-field" id="" placeholder="Nome completo">
                <input type="text" class="header-search-field" id="" placeholder="Email">
                <input type="text" class="header-search-field" id="" placeholder="RA">
                <input type="text" class="header-search-field" id="" placeholder="Curso">
                <div class="form-group">
                    <select class=" header-search-field">
                        <option>Selecione o curso</option>
                        <option>Curso 1</option>
                        <option>Curso 2</option>
                        <option>Curso 3</option>
                    </select>
                </div>
                <label class="label-position">Pré-projeto</label>
                <div class="panel-position">
                    <p class="">Selecione o arquivo referente ao Pré-projeto.</p>
                    <input class="" type="file" id="InputFile">
                </div>
                <input type="text" class="header-search-field" id="" placeholder="Título">
                <textarea rows="5" class="form-control header-search-field" name="menssagem" placeholder="Escreve uma menssagem" id="messagem"></textarea>
                <input type="submit" class="btn btn-enviar" id="" placeholder="Título">
            </form>
            </div>
        </div>
    </div>
<?php
    include_once 'footer.php';
?>
