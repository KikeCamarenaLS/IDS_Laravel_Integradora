@extends('template.header')


@section('content_header')
<h4 class="page-title">Paquetes</h4>

@stop


@section('content')


<body onload="CargarTabla()">
<div class="row"><!-- Inicio ROW-->
	<div class="col-md-12"><!-- Inicio de columna de row -->
		<div class="card"><!-- inicio de cuerpo card -->
			<!-- Cabecera titulo -->
			<div class="card-header">
				<div class="card-title">Nuevo Paquete</div>

			</div><!-- fin cabecera   -->
			<div class="card-body">
					
			<div id="pintarTabla"></div>				
				
					
			</div>
				

			</div><!-- fin cabecera   -->


		</div><!-- Fin de cuerpo de card -->

		<div class="modal fade" id="estatusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Confirmacion</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					
						<div class="modal-body" id="MensajeConfirmModal">

						</div>
						
				</div>
			</div>
		</div>


		<div class="modal fade bd-example-modal-lg" id="modificarModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modificar</h5>

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<br>

				</div>

				<div class="card-body">
					<div class="form-group row " >
						{{-- <div class="col-md-4 has-error has-feedback" > --}}
							<input type="hidden" id="id_hidden" name="id">
						<div class="col-md-4" >
							<label>Nombre del Paquete <span class="required-label"></span></label>
							<input required="" type="text" class="form-control success" id="Paquete_hidden" name="Paquete_hidden" placeholder="Paquete" >
							{{-- {{Form::text('Nombre',null,["class" => "form-control","placeholder" => "Nombre(s)","id" => "Nombre",])}} --}}
						</div>
						<div class="col-md-4">
							<label>Descripcion<span class="required-label"></span></label>
							<textarea class="form-control" id="Descripcion_hidden" name="Descripcion_hidden" placeholder="Descripcion" ></textarea>
						</div>
						<div class="col-md-4">
							<label>Costo<span class="required-label"></span></label>
							<input required="" type="Number" class="form-control" id="Costo_hidden" name="Costo_hidden" placeholder="Costo" >
						</div>
					</div>
				</div>

					<div class="modal-footer">
						<center>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
							<input type="submit" class="btn btn-primary" value="Actualizar" onclick="confirmarModificacion()"> 
						</center>
					</div>
				</form>
			</div>
		</div>
	</div>
		

	</div><!-- fin columna card -->


</div><!-- Fin ROW-->


@endsection

@section('jscustom')
<script type="text/javascript">
	function CargarTabla(){
		$.get("{{url('/cargar/tabla/paquetes')}}", function(data){
         var html='<table class="table table-bordered table-head-bg-primary table-bordered-bd-primary mt-4">'+
						'<thead><tr>'+
							'<th scope="col">ID</th>'+
							'<th scope="col">Paquete</th>'+
							'<th scope="col">Descripcion</th>'+
							'<th scope="col">Precio</th>'+
							'<th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Accion</th>'+
						'</tr>'+
					'</thead>'+
					'<tbody>'+
						'<tr>';
          for(i=0; i<data.length; i++) {
          	var id_paquete="'"+data[i].id_paquete+"'";
          	var paquete="'"+data[i].Paquete+"'";
          	var Descripcion="'"+data[i].Descripcion+"'";
          	var Costo="'"+data[i].Costo+"'";
          html+='<td class="primary" id="ID_paquete">'+data[i].id_paquete+'</td>'+
							'<td class="primary " id="Paquete">'+data[i].Paquete+'</td>'+
							'<td class="primary " id="Descripcion" >'+data[i].Descripcion+'</td>'+
							'<td class="primary " id="Precio">'+data[i].Costo+'</td>'+
							'<td class="primary " id="boton"><a data-toggle="modal" style="color:white;" onclick="modificar('+id_paquete+','+paquete+','+Descripcion+','+Costo+')" class="btn btn-primary">Modificar</a><a data-toggle="modal" style="color:white;" data-toggle="modal" style="color:white;" data-target="#estatusModal" onclick="modal('+id_paquete+','+paquete+')" class="btn btn-danger">Eliminar</a></td></tr>';
          }
          html+='</tbody>'+
					'</table>'+
					'<br>';
          $('#pintarTabla').html(html);        
      });
	}
	function modal(id,paquete){
			$('#myInput').trigger('focus');
			var id_eli="'"+id+"'";
				document.getElementById('MensajeConfirmModal').innerHTML='¿Estas seguro de querer eliminar el paquete  <b>"'+paquete+'"</b>'+
				'<input type="hidden" id="ID_PersonalModal" name="ID_PersonalModal">'+
						'<input type="hidden" id="EstatusModal" name="EstatusModal">'+
						'<div class="modal-footer">'+
						'	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>'+
						'	<input type="submit" class="btn btn-primary" onclick="eliminar('+id_eli+');" value="Aceptar"> '+
						'</div> ';
			
			
	}
	function modificar(id,paquete,descripcion,costo){
		document.getElementById('id_hidden').value=id;
		document.getElementById('Paquete_hidden').value=paquete;
		document.getElementById('Descripcion_hidden').value=descripcion;
		document.getElementById('Costo_hidden').value=costo;
		
		$('#modificarModal').modal('show');
	}
	function confirmarModificacion(){
		var id=document.getElementById('id_hidden').value;
		var paquete=document.getElementById('Paquete_hidden').value;
		var descripcion=document.getElementById('Descripcion_hidden').value;
		var costo=document.getElementById('Costo_hidden').value;
		$.get("{{url('/modificar/paquetes')}}/"+id+"/"+paquete+"/"+descripcion+"/"+costo, function(data){
          console.log(data);
          mensaje("success","El paquete se elimino correctamente");
          CargarTabla();
        });
        $('#modificarModal').modal('toggle');
        this.CargarTabla();
	}
	function eliminar(id_eli){
		
		 $.get("{{url('/eliminar/tabla/paquetes')}}/"+id_eli, function(data){
          console.log(data);
          mensaje("success","El paquete se elimino correctamente");
        });
		 this.CargarTabla();
		  $('#estatusModal').modal('toggle');
	}
	
	function mensaje(color,mensaje){
		if(mensaje=="sin_mensaje"){

		}else{
			var placementFrom = $('#notify_placement_from option:selected').val();
			var placementAlign = $('#notify_placement_align option:selected').val();
			var state =color;
			var style = $('#notify_style option:selected').val();
			var content = {};

			content.message = mensaje;
			content.title = 'Nuevo Personal';
			if (color == "danger") {
				content.icon = 'la la-close';
			} else {
				content.icon = 'la la-check';
			}
			content.url = 'index.html';
			content.target = '_blank';

			$.notify(content,{
				type: state,
				placement: {
					from: placementFrom,
					align: placementAlign
				},
				time: 1000,
			});
		}
		
	}
	
</script>
@endsection