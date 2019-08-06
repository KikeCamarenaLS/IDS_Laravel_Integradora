<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" class="img-thumbnail float-left" href="images/ids.png">
	<title>Ultragym</title>
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>

	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/css/estilos.css"  />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

		<!-- Modal login -->
	@include('Index.partials.modalLogin')

	<!-- modal registro --->
	@include('Index.partials.modalRegistro')

	<!-- Barra de navegacion-->
	@include('Index.partials.navbar')

	<!-- Modal paquete Estudiante-->
	@include('Index.partials.modalPestudiante')

	<!--Modal paquete ayudando-->
	@include('Index.partials.modalPAyudando')

	<!-- Modal paquete todo Incluido-->
	@include('Index.partials.modalPTI')

	<!-- aqui no -->

		<!-- carousel -->
	@include('Index.partials.carousel')

<center>

	</center>

		<!-- navegacion de pagina ONEPage -->

		<section id="funcionalidad" style="height: auto;" >
			<div id="seccion1" >
				<br><br>
				<h1 style="text-align: center; font-family:'Lobster', cursive; ">
					Lo que puedes hacer con UltraGym
				</h1><br><br>
				<div class="container">
					<div class="row align-items-center justify-content-center" style="font-family: cursive;">
						<div class="col ">
							<img  class="rounded-circle" src="images/otros/tienda.gif" style="margin:10px auto;width: 250px; height: 200px;	display:block;"  alt="Compra">
							<h4 align="center">Comprar online</h4>
							<p><h5  style=" font-family: Times, 'Times New Roman', serif; font-style: oblique;" align="center" >Puedes comprar productos en linea o apartarlos para comprarlos en tienda sucursal</h5></p>
						</div>

						<div class="col">

							<img class="rounded-circle" src="images/promos/puedes.gif" style="margin:10px auto;width: 250px; height: 200px;	display:block;" alt="instructor">
							<h4 align="center" >Comunicación directa con instructor y nutriologo</h4>
							<p><h5  style=" font-family: Times, 'Times New Roman', serif; font-style: oblique;" align="center" >Puedes comprar productos en linea o apartarlos para comprarlos en tienda sucursal</h5></p>
						</div>

						<div class="col">

							<img class="rounded-circle" src="images/otros/chec.gif" style="margin:10px auto;width: 250px; height: 200px;	display:block;" alt="Organizar">
							<h4 align="center" >Llevar un control online de tus avances</h4>
							<p><h5  style=" font-family: Times, 'Times New Roman', serif; font-style: oblique;" align="center" >Puedes comprar productos en linea o apartarlos para comprarlos en tienda sucursal</h5></p>
						</div>


					</div>
				</div>
				<div class="container" >
					<center>
					<div class="row justify-content-center" style="font-family: cursive;" >
						<div class="col col-md-4">

							<img class="rounded-circle" src="images/otros/rutinas.gif" style="margin:10px auto;display:block; width: 250px; height: 200px;" alt="Rutinas">
							<h4 align="center" >Consultar rutinas</h4>
							<p><h5  style=" font-family: Times, 'Times New Roman', serif; font-style: oblique;" align="center" >Puedes comprar productos en linea o apartarlos para comprarlos en tienda sucursal</h5></p>
						</div>
						<div class="col col-md-4">

							<img class="rounded-circle" src="images/otros/p.gif" style="margin:10px auto; width: 250px; height: 200px;	display:block;" alt="Dinero" >
							<h4 align="center" >Control de pagos</h4>
							<p><h5  style=" font-family: Times, 'Times New Roman', serif; font-style: oblique;" align="center" >Puedes comprar productos en linea o apartarlos para comprarlos en tienda sucursal</h5></p>

						</div>

					</div>
					</center>
				</div>
			</div>

		</section>

		<section id="presupuestos"  style="height: auto;">
			<br><br>
			<h1 style="text-align: center; font-family:'Lobster', cursive; ">
			OFERTAS
			</h1>
			<br><br>
			@include('Index.partials.precios')
		</section>




		<!-- efecto barnav -->

		<section id="contactanos" style="width:100%; height:30px;">
			<h1 style="text-align: center; color: white; font-family:'Lobster', 'cursive'; ">Contactanos</h1>
			<!-- footer -->

			@include('partials.footer')
		</section>


		<script>

			var contarCupon = 1;

			function cuponModal(){
				if(contarCupon == 1){
					$("#ModalCupon").modal();
				}
			}

			$(document).ready(function(){

				//setTimeout('cuponModal()',5000);

				@if ($errors->any())
					@if ($errors->has('email') or $errors->has('password'))
						contarCupon = contarCupon +1;
						$("#Login").modal()
					@else
						contarCupon = contarCupon +1;
						$("#miModalR").modal()

					@endif
				@endif

			});

			var position = $(window).scrollTop();
			$(window).scroll(function(){
				var scroll = $(window).scrollTop();
				if(scroll > position){
					var element = document.getElementById("menu");
					element.style.opacity = ".5";

					//efecto hover sobre menu
					$(document).ready(function(){
						$("#menu").hover(function(){
							var element = document.getElementById("menu");
							element.style.opacity = "1";
						}, function(){
							var element = document.getElementById("menu");
							element.style.opacity = ".5";
						});
					});
				}else {
					var element = document.getElementById("menu");
					element.style.opacity = "1";
				}
				position = scroll;
			});

		</script><script>

			function mostrarContrasena(){
				var tipo = document.getElementById("pass");
				var ojo = document.getElementById("ojo");
				if(tipo.type == "password"){
					tipo.type = "text";
					ojo.src = "images/icons/ocultar.png";
				}else{
					tipo.type = "password";
					ojo.src = "images/icons/mostrar.png";
				}
			}


		function mostrarContrasenaLogin(){
			var tipo = document.getElementById("password");
			var ojo = document.getElementById("ojoL");
			if(tipo.type == "password"){
				tipo.type = "text";
				ojo.src = "images/icons/ocultar.png";
			}else{
				tipo.type = "password";
				ojo.src = "images/icons/mostrar.png";
			}
		}

	</script>

</body>
</html>
