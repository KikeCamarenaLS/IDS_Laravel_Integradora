@extends('template.header')


@section('content_header')
<h4 class="page-title">Roles</h4>

@stop


@section('content')



<div class="row"><!-- Inicio ROW-->
	<div class="col-md-12"><!-- Inicio de columna de row -->
		<div class="card"><!-- inicio de cuerpo card -->
			<!-- Cabecera titulo -->
			<div class="card-header">
				<div class="card-title">Roles</div>

			</div><!-- fin cabecera   -->
			<div class="card-body">
				{{-- inicio del row --}}

				<div id="app">
					<roles-consulta></roles-consulta>
				</div>
				<script src="{{ asset('js/app.js') }}"></script>


			</div><!-- fin cabecera   -->


		</div><!-- Fin de cuerpo de card -->
	</div><!-- fin columna card -->


</div><!-- Fin ROW-->


@endsection

@section('jscustom')

@endsection