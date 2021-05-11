@extends('plantilla')

@section('contenido')
<section class="content">
	<center>
		<h1> Seleccione como desea Iniciar Sesión</h1>
	</center>

	<div class="row">

		<div class="col-lg-3 col-xs-6">

			<div class="small-box" style="background-color: #F781D8; color:white;">
				<div class="Inner">

					<h3> Secretaria</h3>
					<p> Iniciar Sesión</p>
				</div>

				<div class="icon">
					<i class="fa fa-female"></i>	
				</div>
				<a href="Ingresar" class="small-box-footer">
					Iniciar<i class="fa fa-arrow-circle-right"></i>

				</a>


			</div>
			
		</div>

		<div class="col-lg-3 col-xs-6">

			<div class="small-box" style="background-color: #BDBDBDBD; color:white;">
				<div class="Inner">

					<h3> Doctor</h3>
					<p> Iniciar Sesión</p>
				</div>

				<div class="icon">
					<i class="fa fa-user-md"></i>	
				</div>
				<a href="Ingresar" class="small-box-footer">
					Iniciar<i class="fa fa-arrow-circle-right"></i>

				</a>


			</div>
			
		</div>	

		<div class="col-lg-3 col-xs-6">

			<div class="small-box bg-yellow">
				<div class="Inner">

					<h3> Paciente</h3>
					<p> Iniciar Sesión</p>
				</div>

				<div class="icon">
					<i class="fa fa-users"></i>	
				</div>
				<a href="Ingresar" class="small-box-footer">
					Iniciar<i class="fa fa-arrow-circle-right"></i>

				</a>


			</div>
			

		</div>

			<div class="col-lg-3 col-xs-6">

			<div class="small-box bg-red" >
				<div class="Inner">

					<h3> Administrador</h3>
					<p> Iniciar Sesión</p>
				</div>

				<div class="icon">
					<i class="fa fa-male"></i>	
				</div>
				<a href="Ingresar" class="small-box-footer">
					Iniciar<i class="fa fa-arrow-circle-right"></i>

				</a>


			</div>
			

		</div>

	</div>
</section>

@endsection