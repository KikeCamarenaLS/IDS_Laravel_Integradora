@extends('template.header')


@section('content_header')
<h4 class="page-title">Personal</h4>

@stop


@section('content')



<div class="row"><!-- Inicio ROW-->
	<div class="col-md-12"><!-- Inicio de columna de row -->
		<div class="card"><!-- inicio de cuerpo card -->
			<!-- Cabecera titulo -->
			<div class="card-header">
				<div class="card-title">Nueva Persona</div>

			</div><!-- fin cabecera   -->
			<div class="card-body">
				{{-- inicio del row --}}
				<div class="form-group row " >

					<div class="card-body">
						{{-- inicio del row --}}
						<div class="form-group row " >
							{{-- <div class="col-md-4 has-error has-feedback" > --}}
								<div class="col-md-4" >
									<label>Nombre(s) <span class="required-label">*</span></label>
									<input required="" type="text" class="form-control success" id="Nombre" name="Nombre" placeholder="Nombre(s)" >
									{{-- {{Form::text('Nombre',null,["class" => "form-control","placeholder" => "Nombre(s)","id" => "Nombre",])}} --}}
								</div>
								<div class="col-md-4">
									<label>Apellido Paterno<span class="required-label">*</span></label>
									<input required="" type="text" class="form-control" id="Apellido_Paterno" name="Apellido_Paterno" placeholder="Apellido Paterno " >
								</div>
								<div class="col-md-4">
									<label>Apellido Materno<span class="required-label">*</span></label>
									<input required="" type="text" class="form-control" id="Apellido_Materno" name="Apellido_Materno" placeholder="Apellido Materno">
								</div>
							</div>
							{{-- fin del row --}}
							{{-- inicio del row --}}
							<div class="form-group row " >
								<div class="col-md-12">
									<label>Direccion<span class="required-label">*</span></label>
									<input required="" type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Direccion " >
								</div>

							</div>
							{{-- fin del row --}}

							{{-- inicio del row --}}
							<div class="form-group row " >
								<div class="col-md-4">
									<label>Correo Personal</label>
									<input  type="email" class="form-control " id="Correo_Personal" name="Correo_Personal" placeholder="Correo Personal">
								</div>
								<div class="col-md-4">
									<label>Telefono</label>
									<input  type="number" name="Telefono" min="10000000"  class="form-control" id="Telefono" name="Telefono" placeholder="Telefono " >
								</div>
								<div class="col-md-4">
									<label>Contraseña</label>
									<input  type="text" class="form-control" id="Contra" name="Contra" placeholder="Contraseña">
								</div>

							</div>
							<div class="form-group row " >

								<div class="col-md-4">
									<label>Tipo de usuario</label>
									<input  type="text" class="form-control" id="tUsuario" name="tUsuario" placeholder="Tipo de usuario">
								</div>
							</div>	
							<div class="card-footer">{{-- inicio del row --}}
								<div class="row">
									<div class="col-md-12">
										<center>
											<input onclick="RegistrarPersona()" class="btn btn-success" value="Registrar">
										</center>
									</div>
								</div>
								{{-- fin del row --}}
							</div>

						</div>

					</div>
					
				</div>


			</div><!-- fin cabecera   -->


		</div><!-- Fin de cuerpo de card -->
	</div><!-- fin columna card -->


</div><!-- Fin ROW-->


@endsection

@section('jscustom')
<script type="text/javascript">
	function RegistrarPersona(){
		Nombre=document.getElementById('Nombre').value;
		Ap=document.getElementById('Apellido_Paterno').value;
		Am=document.getElementById('Apellido_Materno').value;
		Direccion=document.getElementById('Direccion').value;
		Correo=document.getElementById('Correo_Personal').value;
		Telefono=document.getElementById('Telefono').value;
		Contra=document.getElementById('Contra').value;
		tUsuario=document.getElementById('tUsuario').value;


		$.get("{{url('/nuevo_personal/registrar/')}}/"+Nombre+"/"+Ap+"/"+Am+"/"+Direccion+"/"+Correo+"/"+Telefono+"/"+Contra+"/"+tUsuario, function(data){
			console.log(data);
			mensaje("success","Se registro correctamente a: <b>"+Nombre+" "+Ap+" "+Am+" </b>");
			limpiar();
		});

	}
	function limpiar(){
		document.getElementById('Nombre').value="";
		document.getElementById('Apellido_Paterno').value="";
		document.getElementById('Apellido_Materno').value="";
		document.getElementById('Direccion').value="";
		document.getElementById('Correo_Personal').value="";
		document.getElementById('Telefono').value="";
		document.getElementById('Contra').value="";
		document.getElementById('tUsuario').value="";
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