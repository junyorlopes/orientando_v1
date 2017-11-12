<?php
    include_once 'header.php';
?>
    <head>
        <meta charset="UTF-8">
        <title>Orientando: Home</title>
    </head>
    <div id="content">
        <header>
            <h1 class="page_title">
                <img class="img-circle" style="width: 20px; height: 20px;" src="../imagens/summer.png" alt="..." >
                    Bom dia, "nome do professor".
            </h1>
        </header>
        <div class="content-inner">
            <label>O conteudo da pagina será adicionado aqui.</label>
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
<?php
    include_once 'footer.php';
?>