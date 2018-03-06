@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                @include('usuarios.header',$datos)
            </div>
            <div class="card-body">                
    @include('usuarios.form',['objeto'=>$objeto,'url'=>'/usuarios','method' => 'POST'])
            </div>
        </div>
    </div>
    
</div>
@section('script')
@endsection

@endsection
