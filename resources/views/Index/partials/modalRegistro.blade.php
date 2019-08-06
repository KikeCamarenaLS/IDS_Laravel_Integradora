<div class="modal fade"  id="miModalR" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"><h4 class="modal-title" id="myModalLabel">Registro de usuario</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>

				</div>
				<div class="modal-body">
					<form action="{{route('principal.store')}}" method="POST">
						<div class="form-group">
							<label for="exampleInputEmail1" style="color: black">Correo Electronico</label>
							<input type="email" name="mail" class="form-control" placeholder="Escribe E-mail" value="{{old('mail')}}">
							<CENTER><span class="badge badge-pill badge-danger">{{$errors->first('mail')}}</span></CENTER>
						</div>


						<div class="form-group">
							<label for="exampleInputEmail1" style="color: black">Password</label>
							<div class="col-auto">
								<label class="sr-only" for="inlineFormInputGroup">Contraseña</label>
								<div class="input-group mb-2">

									<input type="password" name="pass" id="pass" class="form-control" placeholder="Escribe password"
									style=" width: 85%;" value="{{old('pass')}}">
									<div class="input-group-prepend">
										<div class="input-group-text" onclick="mostrarContrasena()" >
											<a><img src="images/icons/mostrar.png" id="ojo" width="22px" onsubmit="mostrarContrasena()"> </a>
										</div>
									</div>
								</div>
							</div>

							<CENTER><span class="badge badge-pill badge-danger">{{$errors->first('pass')}}</span></CENTER>
						</div>


						<div class="form-group">
							<label for="exampleInputEmail1"  style="color: black">Nombre </label>
							<input type="text" name="nombre" class="form-control" placeholder="Escribe tu Nombre" value="{{old('nombre')}}">
							<CENTER><span class="badge badge-pill badge-danger">{{$errors->first('nombre')}}</span></CENTER>
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1"  style="color: black">Apellido Paterno</label>
							<input type="text" name="apellido_p" class="form-control" placeholder="Escribe tus apellidos" value="{{old('apellido_p')}}">
							<CENTER><span class="badge badge-pill badge-danger">{{$errors->first('apellido_p')}}</span></CENTER>
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1"  style="color: black">Apellido Materno</label>
							<input type="text" name="apellido_m" class="form-control" placeholder="Escribe tus apellidos" value="{{old('apellido_m')}}">
							<CENTER><span class="badge badge-pill badge-danger">{{$errors->first('apellido_m')}}</span></CENTER>
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1"  style="color: black">Fecha de nacimiento</label>
							<input type="date" name="fNacimiento" class="form-control" placeholder="Escribe tu fecha" value="{{old('fNacimiento')}}">
							<CENTER><span class="badge badge-pill badge-danger">{{$errors->first('fNacimiento')}}</span></CENTER>
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1"  style="color: black">Direccion</label>
							<input type="text" name="direccion" class="form-control" placeholder="Escribe tu direccion" value="{{old('direccion')}}">
							<CENTER><span class="badge badge-pill badge-danger">{{$errors->first('direccion')}}</span></CENTER>
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1"  style="color: black">Telefono</label>
							<input type="number" name="telefono" class="form-control" placeholder="Escribe tu telefono" value="{{old('telefono')}}">
							<CENTER><span class="badge badge-pill badge-danger">{{$errors->first('telefono')}}</span></CENTER>
						</div>


						<center><div class="form-group">
							<input type="submit" value="Registrar" class="btn btn-primary">
						</div></center>
						{{ csrf_field()}}
					</form>
				</div>
			</div>
		</div>
	</div>
