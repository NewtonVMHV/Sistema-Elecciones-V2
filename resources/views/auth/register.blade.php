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
							<h1 class="fs-4 card-title fw-bold mb-4">Registro</h1>
							<form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate="" autocomplete="off">
                                @csrf
								<div class="mb-3">
									<label class="mb-2 text-muted" for="name">Nombre</label>
									<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
									@error('name')
                                        <div class="invalid-feedback">
                                            Nombre es requerido
                                        </div>
                                    @enderror
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Correo Electronico</label>
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"value="{{ old('email') }}" required autocomplete="email">
									@error('email')
                                        <div class="invalid-feedback">
                                            Correo es invalido
                                        </div>
                                    @enderror
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="password">Contraseña</label>
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
								    @error('password')
                                        <div class="invalid-feedback">
                                            Contraseña es requerida
                                        </div>
                                    @enderror
								</div>
                                <div class="mb-3">
                                    <label for="password-confirm" class="mb-2 text-muted">Confirmar contraseña</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
								<div class="align-items-center d-flex">
									<button type="submit" class="btn btn-primary ms-auto">
										Registrarte	
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-dark">Iniciar Sesión</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection
