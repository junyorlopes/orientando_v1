                <div class="row">
                    <footer id="admin-footer" class="clearfix">
                        <div class="pull-left">
                            <b>Copyright </b>&copy; 2016
                        </div>
                        <div class="pull-right">
                            <i>Perfil pessoal.</i>
                        </div>
                    </footer>
                </div>
            </div><!-- <div class="col-md-10 col-sm-11 disabled-table-cell valing-top"> -->
        </div><!-- <div class="row disabled-table-row"> -->
    </div><!-- <div class="container-fluid disabled-table"> -->
</body>
<!-- JavaScript plugins -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../utilitarios/bootstrap/js/bootstrap.min.js"></script>
<script src="../utilitarios/summernote-master/dist/summernote.min.js"></script>
<script src="../utilitarios/chosen_v1.6.2/chosen.jquery.min.js"></script>
<script src="js/default.js"></script>
<script type="text/javascript">
    $('.summernote').summernote({
       height: 200 
    })
</script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<script type="text/javascript">
    var config = {
        '.chosen-select' : {},
        '.chosen-select-deselect' : {allow_single_deselect : true},
        '.chosen-select-no-single' : {disable_search_threshold: 10},
        '.chosen-select-no-result' : {no_results_text: "Ops!"},
        '.chosen-select-width' : {width: "95%"},
    }
    for (var selector in config){
        $(selector).chosen(config[selector]);
    }
</script>
</html>