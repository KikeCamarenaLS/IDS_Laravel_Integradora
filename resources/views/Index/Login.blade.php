<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <head>
    <meta charset="utf-8">
    <title>UltraGym</title>
  </head>
  <body>
    <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog" role="document" style="width:28%;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<center><h3 class="modal-title " id="myModalLabel"></h3></center>
			</div>
			<div class="modal-body">
				<form method="get" action="{{Route('postLogin')}}" >
          @csrf
          <label>Correo electrónico</label><br>
          <input type="text" class="form-control" name="Correo" style="height:35PX; width:90%;"><br>
          <label>Contraseña</label><br>
          <input type="password" class="form-control" name="Contraseña" style="height:35PX; width:90%;"><br><br>
          <center>
          <input type="submit" class="btn btn-primary btn-lg " value="Iniciar sesión">
          <br>
        <a style='color:blue;'>¿Olvidaste tu cuenta?</a>
        <?php
    $mensaje=request('Mensajes');
    if($mensaje==""){
    ?>  <?php
    }else{
    ?>
    <div class="alert alert-success" style="width:60%; height:50px;">
        {{request('Mensajes')}}
    </div>
    <?php } ?>
      </center>
        </form>
			</div>
		</div>
	</div>
</div>

<button type="button" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#miModal">
	Iniciar sesión
</button>

  </body>
</html>
