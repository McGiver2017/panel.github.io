<div class="card-block">
    <h5 class="m-b-10">{{ $label}}</h5>
    <p class="text-muted m-b-10">{{ $descripcion}}</p>
        <ul class="breadcrumb-title line">
            <li class="breadcrumb-item">
                <a href="index.html"> <i class="fa fa-home"></i> </a>
            </li>
            <li class="breadcrumb-item"><a href="#!">{{ $ruta}}</a>
            </li>
            <li class="breadcrumb-item"><a href="#!">{{ $opcion}}</a>
            </li>
        </ul>
    </div> 
    <br>
<a href="{{ url('/comunicados/create') }}" class="btn btn-default">Registrar</a>
</div>