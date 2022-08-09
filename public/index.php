<?php
include '../src/Controller/meta.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>

    <link rel="stylesheet" href="../src/View/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.12.1/b-2.2.3/sl-1.4.0/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<!-- Compiled and minified JavaScript -->

</head>
<body>

<div id="container">
<p> Selecione a opção de gerenciamento. </p>
    <div id="panel">
        <a class="waves-effect waves-light btn" id="button-product" onclick="apertadinha()">Produtos</a>
        <a class="waves-effect waves-light btn" id="button-group">Grupos</a>
    </div>
    <div class="modal fade" role="dialog" id="apert">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Gerenciamento de Produtos</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                        <table id="datatable">
                            <thead>
                                <tr>
                                    <th>Descrição</th>
                                    <th>Codigo De Barra</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default " data-dismiss="modal">Apply!</button>
                <button type="button" class="btn btn-primary" onclick="fechadinha()">Close</button>
            </div>
        </div>
    </div>
</div>






<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.12.1/b-2.2.3/sl-1.4.0/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="../src/View/js/script.js"></script>
<script type="text/javascript" src="../src/Model/jquery.tabledit.min.js"></script>
</body>
</html>
