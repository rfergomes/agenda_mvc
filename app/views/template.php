<!doctype html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE ?>assets/js/datatables/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE ?>assets/js/datatables/css/responsive.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE ?>assets/js/datatables/css/style_dataTable.css">

        <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE ?>assets/css/auxiliar.css">
        <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/grade.css">
        <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/style.css">		

        <!--font icones-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <script src="<?php echo URL_BASE ?>assets/js/jquery.min.js"></script>
        <script>
            var base_url = "<?= URL_BASE ?>";
        </script>
    </head>
    <body>
        <?php include "cabecalho.php" ?>
        <div class="conteudo">
            <?php $this->load($view, $viewData); ?> 
        </div>
        <?php include "rodape.php" ?>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>		
        <script src="https://kit.fontawesome.com/9480317a2f.js"></script>
        <script src="<?php echo URL_BASE ?>assets/js/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo URL_BASE ?>assets/js/datatables/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo URL_BASE ?>assets/js/jquery.mask.js" type="text/javascript"></script>
        <script src="<?php echo URL_BASE ?>assets/js/componentes/js_data_table.js"></script>
        <script src="<?php echo URL_BASE ?>assets/js/componentes/js_mascara.js" type="text/javascript"></script>
        <script src="<?php echo URL_BASE ?>assets/js/js.js"></script>
    </body>
</html>