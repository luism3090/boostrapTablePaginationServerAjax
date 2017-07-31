<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Inicio Login</title>
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.css">

</head>
<body>
<br>
    <div class="container">
    <div class="table-responsive">
     <br>
    <div class="row">
          <div class="col-xm-12 text-center">
            <button type="button" class="btn btn-success" id="btnRegistrarEnc"> <span class="glyphicon glyphicon-plus"></span> Registrar</button>
             <button type="button" class="btn btn-primary" id="btnModificarEnc"> <span class="glyphicon glyphicon-pencil"></span> Modificar</button>
              <button type="button" class="btn btn-danger" id="btnEliminarEnc"> <span class="glyphicon glyphicon-circle-arrow-down"></span> Eliminar</button>
          </div>
    </div>
   <div class="row">
          <div class="col-xs-12 col-md-12">
              <table  id="Mytable" 
                      data-toggle="table"
                      data-pagination="true"
                      data-ajax="loadTable"
                      data-side-pagination="server" 
                      data-toolbar="#toolbar" 
                      data-search="true" 
                      data-show-refresh="true"
                      data-click-to-select = "true"
                      data-page-list="[10, 20, 50]" 
                      data-show-toggle="true" 
                      >
                  <thead>
                    <tr>
                        <th data-field="state" data-radio="true"></th>
                        <th data-field="id_usuario" data-align="right" data-sortable="true">id usuario</th>
                        <th data-field="nombre" data-align="center" data-sortable="true">Nombre</th>
                        <th data-field="apellidos" data-align="center" data-sortable="true">Apellidos</th>
                        <th data-field="email" data-align="center" data-sortable="true">Email</th>
                        <th data-field="fecha_registro" data-align="center" data-sortable="true">Fecha de registro</th>
                        <th data-field="modificar" data-align="center" data-sortable="true">Modificar</th>
                        <th data-field="eliminar" data-align="center" data-sortable="true">Eliminar</th>
                    </tr>
                  </thead>
              </table>
          </div>
      </div>
      
        
    </div>
</div>
 <br><br> <br><br>

<script src="//code.jquery.com/jquery-1.12.4.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/locale/bootstrap-table-es-MX.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/tabla.js"></script> 

</body>
</html>