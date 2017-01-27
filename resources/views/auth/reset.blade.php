@extends('layouts.principal')
	@section('content')
	@include('alerts.success')
		<div class="contact-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
					<p>Movie Theater</p>
				</div>
			<div class="clearfix"></div>
			</div>

			<div class="main-contact">
				 <h3 class="head">CONTACT</h3>
				 <p>WE'RE ALWAYS HERE TO HELP YOU</p>
				 <div class="contact-form">
					 {!!Form::open(['url' => '/password/reset', 'method' => "POST"])!!}
					 	<div class="col-md-6 contact-left">
					 		{!!Form::hidden('token',$token,null)!!}
							<div>
								{!! Form::label('email', 'Correo electrónico:') !!}
						 		{!!Form::text('email',null,['value' => "{{old('email')}}"])!!}
							</div>
							<div>
								{!! Form::label('password', 'Nueva Contraseña:') !!}
						 		{!!Form::password('password')!!}
							</div>
							<div>
								{!! Form::label('password', 'Confirmar nueva Contraseña:') !!}
						 		{!!Form::password('password_confirmation')!!}
							</div>
						</div>

						{!!Form::submit('Restablecer contraseña')!!}
					 {!!Form::close()!!}
				</div>
			</div>
		</div>
@endsection
