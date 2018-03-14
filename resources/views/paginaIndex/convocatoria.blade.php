@extends('layouts.appclear')

@section('content')
    <div>
        <div class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-4">
                        <div class="card text-center">
                            <div class="card-title">
                                <h3><strong>CONVOCATORIAS</strong></h3>
                            </div>
                            <div class="card-body p-5">
                                <div >
                                    <div class="table-responsive mt-4">
                                        <table id="bootstrap-table" class="table">
                                            <thead>
                                            <th data-field="state" data-checkbox="true"></th>
                                            <th data-field="id" class="text-center">ID</th>
                                            <th data-field="titulo" data-sortable="true">Descripción</th>
                                            <th data-field="fecha" data-sortable="true">Fecha Convocatoria</th>
                                            <th data-field="bases" data-sortable="true">Bases y Perfiles</th>
                                            <th data-field="resultados" data-sortable="true">Resultados</th>
                                            <th data-field="estado" data-sortable="true">Estado</th></thead>
                                            <tbody>
                                            @foreach($listas as $lista)
                                                <tr>
                                                    <td></td>
                                                    <td>{{ $lista->id }}</td>
                                                    <td>{{ $lista->descripcion}}</td>
                                                    <td>{{ $lista->fecha_convocatoria}}</td>
                                                    <td>
                                                        <?php
                                                            echo $lista->bases_perfiles;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        echo $lista->resultados;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        @if($lista->estado == 'activado')
                                                        <button class="btn btn-success">Activo</button>
                                                            @else
                                                            <button class="btn btn-danger">Desactivado</button>
                                                            @endif


                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <p class="Estilo36 Estilo65">Publicado: 05/07/2017 </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">

                </div>
                <br>

            </div>
        </div>
    </div>
@endsection