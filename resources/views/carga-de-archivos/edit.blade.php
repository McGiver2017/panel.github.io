@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                @include('carga-de-archivos.header',$datos)
            </div>
            <div class="card-body">                
    @include('carga-de-archivos.form',['objeto'=>$objeto,'url'=>'/archivos/'.$objeto->id,'method' => 'PUT'])
                {!! Form::open(['url'=>'/archivos/'.$objeto->id,'method' => 'Delete'] ) !!}
                <button type="submit" class="btn btn-danger">Eliminar</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    
</div>
@section('script')
@endsection

@endsection
