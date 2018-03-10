{!! Form::open(['url'=>$url,'method' => $method , 'files' => true]) !!}
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
            Descripción
            <star class="star">*</star>
        </label>
        {!! Form::textarea('descripcion', $objeto->descripcion, ['class'=>'form-control','placeholder'=>'Ingrese su nombre...','id'=>'descripcion']) !!}

        </div>
        <div class="form-group has-label">
            <label>
                Fecha
                <star class="star">*</star>
            </label>
            {!! Form::text('fecha', $objeto->fecha, ['class'=>'form-control','placeholder'=>'Ingrese la fecha personalizada...']) !!}
        </div>

        <div class="form-group text-right">
        <a href="{{url('/comunicados')}}">Regresar al listado de producto</a></div>
        <input type="submit" value="Enviar" class="btn btn-success">
{!! Form::close() !!}
<script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'descripcion' );
</script>