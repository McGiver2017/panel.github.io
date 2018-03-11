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
            Titulo
            <star class="star">*</star>
        </label>
        {!! Form::text('titulo', $objeto->titulo, ['class'=>'form-control','placeholder'=>'Ingrese su nombre...']) !!}

        </div>
        <div class="form-group has-label">
        <label>
            Cuerpo
            <star class="star">*</star>
        </label>
            {!! Form::textarea('cuerpo', $objeto->cuerpo, ['class'=>'form-control','placeholder'=>'Ingrese su cuerpo de nota de prensa...']) !!}
        </div>
        <div class="form-group has-label">
            <label>
                Fecha
                <star class="star">*</star>
            </label>
            {!! Form::text('fecha', $objeto->fecha, ['class'=>'form-control','placeholder'=>'Ingrese la fecha personalizada...']) !!}
        </div>
        <div class="form-group has-label">
            <label>
                Ruta de imagen
                <star class="star">*</star>
            </label>
            {!! Form::file('imagen', null, ['class'=>'form-control','placeholder'=>'Ingrese la fecha personalizada...', 'type'=>'file', 'accept'=>'image/*']) !!}
        </div>

        <div class="form-group text-right">
        <a href="{{url('/notas-de-prensa')}}">Regresar al listado de producto</a></div>
        <input type="submit" value="Enviar" class="btn btn-success">
{!! Form::close() !!}

<script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'cuerpo' );
</script>