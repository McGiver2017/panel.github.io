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
            {!! Form::text('descripcion', $objeto->descripcion, ['class'=>'form-control','placeholder'=>'Ingrese su cuerpo de nota de prensa...']) !!}
        </div>
        <div class="form-group has-label">
            <label>
                Tipo de archivo
                <star class="star">*</star>
            </label>
            {!! Form::select('tipo', $tipo,$objeto->tipo,['class' => 'form-control']) !!}
        </div>
        <div class="form-group has-label">
            <label>
                Ruta de Archivo
                <star class="star">*</star>
            </label>
            {!! Form::file('archivo', null, ['class'=>'form-control', 'type'=>'file', 'accept'=>'image/*']) !!}
        </div>

        <div class="form-group text-right">
        <a href="{{url('/archivos')}}">Regresar al listado de archivos</a></div>
        <input type="submit" value="Enviar" class="btn btn-success">
{!! Form::close() !!}

<script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'cuerpo' );
</script>