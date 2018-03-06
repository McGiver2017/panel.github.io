{!! Form::open(['url'=>$url,'method' => $method]) !!}
@if ($errors->all())
    <div class="alert alert-danger">
    <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
        <i class="nc-icon nc-simple-remove"></i>
    </button>
    <span>
        <ul>            
            @foreach($errors->all() as $error)  
            <li>
                <strong>{{ $error}}</strong>
            </li>
            @endforeach  
        </ul>  
    </span>        
    </div>
@endif
        <div class="form-group has-label">        
        <label>
            Nombre
            <star class="star">*</star>
        </label>
        {!! Form::text('name', $objeto->title, ['class'=>'form-control','placeholder'=>'Ingrese su nombre...']) !!}
        
        </div>
        <div class="form-group has-label">        
        <label>
            Correo Electronico
            <star class="star">*</star>
        </label>       
        {!! Form::email('email', $objeto->pricing, ['class'=>'form-control','placeholder'=>'Ingrese su correo electronico...']) !!}
        </div>
        <div class="form-group has-label">        
        <label>
            Contraseña
            <star class="star">*</star>
        </label>       
        {!! Form::password('password', ['class'=>'form-control','placeholder'=>'Ingrese su contraseña']) !!}
        </div>
        <div class="form-group has-label">        
        <label>
            Repita su contraseña
            <star class="star">*</star>
        </label>        
        {!! Form::password('password_confirmation', ['class'=>'form-control','placeholder'=>'Vuelva a Ingresar su contraseña']) !!}
        </div>
        <div class="form-group text-right">        
        <a href="{{url('/usuarios')}}">Regresar al listado de producto</a></div>
        <input type="submit" value="Enviar" class="btn btn-success">
{!! Form::close() !!}