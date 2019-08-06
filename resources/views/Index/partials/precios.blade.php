<div class="container" >

	<div class="row justify-content-center">
		<div class="col clearfix col-md-4">
			<div class="card shadow" style="width: 20rem;">
				<div class="inner" style="overflow: hidden;" >
					<img class="card-img-top" src="images/promos/estudiantes.jpg" alt="Card image cap" style=" height: 220px; width: 20rem;  " >
				</div>
				<div class="card-body text-center" >
					<h5 class="card-title">Paquete estudiantes</h5>
					<p class="card-text" >Si eres estudiante puedes obtener descuentos en el gimnasio, unicamente presentando tu credencial de la escuela. Pregunta por nuestras ofertas.</p>
					<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#miModalPEs"  >Ver mas...</a>
				</div>
			</div>
		</div>
		<!-- segundo paquete -->
		<div class="col clearfix  col-md-4">
			<div class="card shadow" style="width: 20rem;">
				<div class="inner">
					<img class="card-img-top" src="images/promos/instructor.jpg" alt="Card image cap" style=" height: 220px; width: 20rem;" >
				</div>
				<div class="card-body text-center" >
					<h5 class="card-title">Paquete Ayudando</h5>
					<p class="card-text" >Te ayudamos a llevar un control de salud, dietas y rutinas, contrata el paquete "Ayudando" y recibe apoyo de un nutriologo, medico e instructor</p>
					<a href="#" class="btn btn-primary" data-toggle="modal"  data-target="#miModalAyu">Ver mas...</a>
				</div>
			</div>
		</div>
		<!-- tercer paquete -->
		<div class="col clearfix  col-md-4">
			<div class="card shadow" style="width: 20rem;">
				<div class="inner">
					<img class="card-img-top" src="images/promos/piscina.jpg" alt="Card image cap" style=" height: 220px; width: 20rem;" >
				</div>
				<div class="card-body text-center" >
					<h5 class="card-title">Paquete Todo incluido</h5>
					<p class="card-text" >Más por menos, obten grandes descuentos para gozar de los servicios de alberca, regaderas, vapor y lockers por un increible bajo precio</p>
					<a href="#" class="btn btn-primary"  data-toggle="modal"  data-target="#miModalTI">Ver mas...</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- cuarto paquete cupones -->
<div class="container">
	<div class="card text-center">
		<div class="card-header" style="font-family: cursive;font-weight: bold;" >
			CUPONES!!!!!!!
		</div>
		<div class="card-body">
			<h5 class="card-title">Cupones de descuento</h5>
			<p class="card-text">Descarga este cupon y obten increibles descuentos en el gimnasio. (aplica restricciones).</p>
			<img class="card-img-top" src="images/promos/Cupones.png" alt="Card image cap" style=" height: 200px; width: 20rem;" >
		</div>
		<div class="card-footer text-muted">
			<form method="get" action="{{Route('DescargarPDF')}}" >
		    	<input type="submit" class="btn btn-primary" value="Descargar Cupon">
		    </form>

		</div>
	</div>
</div>