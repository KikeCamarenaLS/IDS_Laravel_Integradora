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
							'</tr>';
          }
          html+='</tbody>'+
					'</table>'+
					'<br>';
          $('#pintarTabla').html(html);        
      });
	}
	
	
</script>
@endsection