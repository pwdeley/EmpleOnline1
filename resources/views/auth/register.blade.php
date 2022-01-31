@extends('welcome')

@section('content')

<section class="main-content-w3layouts-agileits">
		<div class="container">
			<h3 class="tittle">Register Now</h3>
				<div class="inner-sec">
			<div class="login p-5 bg-light mx-auto mw-100">
				<form action="{{ route('register') }}" method="post">

					@csrf

						<div class="form-row">
								<div class="col-md-6 mb-3">
										<label for="validationCustom01">Su nombre de usuario</label>

									<input type="text" class="form-control" name="name" id="validationDefault01" placeholder="" required="">
								</div>
								<div class="col-md-6 mb-3">
										<label for="validationCustom02">Su email</label>
									<input type="email" name="email" class="form-control" id="validationDefault02" placeholder="" required="">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
										<label for="exampleInputPassword1 mb-2">Contraseña</label>
									<input type="password" name="password" class="form-control" id="password1" placeholder="" required="">
								</div>
								<div class="form-group col-md-6">
										<label for="exampleInputPassword2 mb-2">Confirmar Contraseña</label>
										<input type="password" name="password_confirmation" class="form-control" id="password2" placeholder="" required="">
									</div>
								
							</div>
							<button type="submit" class="btn btn-primary submit mb-4">Register</button>
								<p>
									<a href="#">By clicking Signup, I agree to your terms</a>
								</p>
						</form>
		
					</div>
			</div>
		</div>
	</section>


@endsection
