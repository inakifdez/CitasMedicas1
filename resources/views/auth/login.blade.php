@extends('plantilla')

@section('contenido')


<div class="login-box">
    
    <div class="login-logo">
        <b>Citas Medicas</b>
    </div>  

    <div class="login-box-body">

        <p class="login-box-msg">Iniciar Sesión</p>

        <form method="post" action="{{ route('login') }}">

            @csrf
            
            <div class="form-group has-feedback">

                <input type="email" name="email" class="form-control" required="" value="">

                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                

            </div>
            <div class="form-group has-feedback">

                <input type="password" name="password" class="form-control" required="" value="">

                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                

            </div>

            <div class="row">
                
                <div class="coll-xs-12">
                    
                    <button type="submit" class="btn btn-primary btn-block btn flat"> Aceptar </button>

                </div>

            </div>


        </form>
        
    </div>
</div>









@endsection
