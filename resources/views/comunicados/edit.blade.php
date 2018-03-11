@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                @include('usuarios.header',$datos)
            </div>
            <div class="card-body">                
    @include('comunicados.form',['objeto'=>$objeto,'url'=>'/comunicados/'.$objeto->id,'method' => 'PUT'])
            </div>
        </div>
    </div>
    
</div>
@section('script')
@endsection

@endsection
