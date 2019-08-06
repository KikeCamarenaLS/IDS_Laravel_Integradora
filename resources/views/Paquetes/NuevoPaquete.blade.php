@extends('template.header')


@section('content_header')
<h4 class="page-title">Paquetes</h4>

@stop


@section('content')



<div class="row"><!-- Inicio ROW-->
	<div class="col-md-12"><!-- Inicio de columna de row -->
		<div class="card"><!-- inicio de cuerpo card -->
			<!-- Cabecera titulo -->
			<div class="card-header">
				<div class="card-title">Nuevo Paquete</div>

			</div><!-- fin cabecera   -->
			<div class="card-body">
					{{-- inicio del row --}}
					<div class="form-group row " >
						{{-- <div class="col-md-4 has-error has-feedback" > --}}
						<div class="col-md-4" >
							<label>Nombre del Paquete <span class="required-label">*</span></label>
							<input required="" type="text" class="form-control success" id="Paquete" name="Paquete" placeholder="Paquete" >
							{{-- {{Form::text('Nombre',null,["class" => "form-control","placeholder" => "Nombre(s)","id" => "Nombre",])}} --}}
						</div>
						<div class="col-md-4">
							<label>Descripcion<span class="required-label">*</span></label>
							<textarea class="form-control" id="Descripcion" name="Descripcion" placeholder="Descripcion" ></textarea>
						</div>
						<div class="col-md-4">
							<label>Costo<span class="required-label">*</span></label>
							<input required="" type="Number" class="form-control" id="Costo" name="Costo" placeholder="Costo" >
						</div>
					</div>
					{{-- fin del row --}}
					
					
					
					<br>
					
				</div>
				<div class="card-footer">{{-- inicio del row --}}
					<div class="row">
						<div class="col-md-12">
							<center>
								<input onclick="RegistrarPaquete()" type="submit" class="btn btn-success" value="Registrar">
							</center>
						</div>
					</div>
					{{-- fin del row --}}
				</div>

			</div><!-- fin cabecera   -->


		</div><!-- Fin de cuerpo de card -->


			@if(Session::has('message'))
			<div class="alert alert-{{ Session::get('color') }}" role="alert">
			   {{ Session::get('message') }}
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
			@endif

	</div><!-- fin columna card -->


</div><!-- Fin ROW-->


@endsection

@section('jscustom')
<script type="text/javascript">
	function RegistrarPaquete(){
		paquete=document.getElementById('Paquete').value;
		Descripcion=document.getElementById('Descripcion').value;
		Costo=document.getElementById('Costo').value;

		 $.get("{{url('/home/nuevo_paquete/registrar/')}}/"+paquete+"/"+Descripcion+"/"+Costo, function(data){
          console.log(data);
          mensaje("success","El paquete "+paquete+" se registro correctamente");
          limpiar();
        });

	}
	function limpiar(){
		document.getElementById('Paquete').value="";
		document.getElementById('Descripcion').value="";
		document.getElementById('Costo').value="";
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