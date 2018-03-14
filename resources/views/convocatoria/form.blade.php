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
        {!! Form::text('descripcion', $objeto->descripcion, ['class'=>'form-control','placeholder'=>'Ingrese su nombre...']) !!}

        </div>
        <div class="form-group has-label">
        <label>
            Fecha de Convocatoria
            <star class="star">*</star>
        </label>
            {!! Form::date('fecha_convocatoria', $objeto->fecha_convocatoria, ['class'=>'form-control','placeholder'=>'Ingrese su cuerpo de nota de prensa...']) !!}
        </div>
        <div class="form-group has-label">
            <label>
                Base y Perfiles
                <star class="star">*</star>
            </label>
            {!! Form::textarea('bases_perfiles', $objeto->bases_perfiles, ['class'=>'form-control','placeholder'=>'Ingrese la fecha personalizada...']) !!}
        </div>
        <div class="form-group has-label">
            <label>
                Resultados
                <star class="star">*</star>
            </label>
            {!! Form::textarea('resultados', $objeto->resultados, ['class'=>'form-control','placeholder'=>'Ingrese la fecha personalizada...']) !!}
        </div>

        <div class="form-group text-right">
        <a href="{{url('/notas-de-prensa')}}">Regresar al listado de producto</a></div>
        <input type="submit" value="Enviar" class="btn btn-success">
{!! Form::close() !!}

<script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'bases_perfiles' );
    CKEDITOR.replace( 'resultados' );
</script>