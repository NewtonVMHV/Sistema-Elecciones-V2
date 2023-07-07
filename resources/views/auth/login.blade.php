@extends('layouts.app')

@section('content')
<div class="container">
    <section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="{{ URL::asset('img/e.png') }}" alt="logo" width="100">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Inicio de Sesión</h1>
							<form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="" autocomplete="off">
                                @csrf
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Correo Electronico</label>
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autofocus>
									@error('email')
                                        <div class="invalid-feedback">
                                            Correo es invalido
                                        </div>
                                    @enderror
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Contraseña</label>
										<a href="{{ route('password.request') }}" class="float-end">
											¿Olvidaste su contraseña?
										</a>
									</div>
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
								    @error('password')
                                        <div class="invalid-feedback">
                                            Contraseña es requerida
                                        </div>
                                    @enderror
								</div>

								<div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
										<label for="remember" class="form-check-label">Recuerdame</label>
									</div>
									<button type="submit" class="btn btn-primary ms-auto">
										Ingresar
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								¿No tengo una cuenta? <a href="{{ route('register') }}" class="text-dark">Crea una cuenta</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection
