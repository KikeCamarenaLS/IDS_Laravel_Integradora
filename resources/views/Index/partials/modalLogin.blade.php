	<div class="modal fade"  id="Login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  >
		<div class="modal-dialog" role="document" style="width:32%;">
			<div class="modal-content">
				<div class="modal-header">
					<center><h3 class="modal-title " id="myModalLabel">Login</h3></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</div>
					<div class="modal-body">

						<form method="POST" action="{{ route('login') }}">
							@csrf
							<center>
								<?php
								if($errors->first('email')){
									?> 	<div class="alert alert-danger" style="width:80%; height:50px;">
										Usuario/Contraseña incorrectos
										</div> <?php
									}else{
										?>

										<?php } ?>
									</center>
									<div class="form-group row">
										<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

										<div class="col-md-6">
											{{Form::text('email', null,[ ' class ' => ' form-control ', 'id'=>'email','name'=>'email', 'required','placeholder'=>'Ingresa tu correo'])}}
										</div>
									</div>

									<div class="form-group row">
										<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

										<div class="col-md-6">
											<p><div class="input-group-prepend">
												{{Form :: password ( ' password ' , [ ' class '  =>  ' form-control ' , 'style' =>'width:100%' , 'id'=>'password','name'=>'password', 'required','placeholder'=>'Ingresa tu contraseña'])}}
												<div class="input-group-text" onclick="mostrarContrasenaLogin()" >
													<a><img src="images/icons/mostrar.png" id="ojoL" width="22px" onsubmit="mostrarContrasenaLogin()"> </a>
												</div>
											</div>

										</p>

									</div>
								</div>

								<div class="form-group row">
									<div class="col-md-6 offset-md-4">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

											<label class="form-check-label" for="remember">
												{{ __('Recordar contraseña') }}
											</label>
										</div>
									</div>
								</div>

								<div class="form-group row mb-0">
									<div class="col-md-8 offset-md-4">
										<button type="submit" class="btn btn-primary">
											{{ __('Entrar') }}
										</button>

										@if (Route::has('password.request'))
										<a class="btn btn-link" href="{{ route('password.request') }}">
											{{ __('¿Olvidaste tu contraseña?') }}
										</a>
										@endif
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>