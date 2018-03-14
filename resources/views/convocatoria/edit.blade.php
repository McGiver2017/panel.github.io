@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                @include('convocatoria.header',$datos)
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7">
                        @include('convocatoria.form',['objeto'=>$objeto,'url'=>'/convocatoria/'.$objeto->id,'method' => 'PUT'])
                        {!! Form::open(['url'=>'/convocatoria/'.$objeto->id,'method' => 'Delete'] ) !!}
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        {!! Form::close() !!}
                    </div>
                    <div class="col-md-5">
                        @include('comunicados.showArchivos');
                    </div>
                </div>

            </div>
        </div>
    </div>
    
</div>
@section('script')
@endsection

@endsection
