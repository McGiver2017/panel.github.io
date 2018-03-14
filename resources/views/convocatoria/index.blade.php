@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                @include('convocatoria.header',$datos)
            </div>            
        </div>
    </div>
    <div class="col-md-12">
        <div class="card bootstrap-table">
            <div class="card-body table-full-width">
                <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <table id="bootstrap-table" class="table">
                    <thead>
                        <th data-field="state" data-checkbox="true"></th>
                        <th data-field="id" class="text-center">ID</th>
                        <th data-field="titulo" data-sortable="true">Descripción</th>
                        <th data-field="fecha" data-sortable="true">Fecha Convocatoria</th>
                        <th data-field="bases" data-sortable="true">Bases y Perfiles</th>
                        <th data-field="resultados" data-sortable="true">Resultados</th>
                        <th data-field="estado" data-sortable="true">Estado</th>
                        <th data-field="actions" class="td-actions text-right" data-events="operateEvents" data-formatter="operateFormatter">Actions</th>
                    </thead>
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
                                    <a href="{{ url('convocatoria/estado/'.$lista->id) }}" class="btn btn-success">Activo</a>
                                @else
                                    <a href="{{ url('convocatoria/estado/'.$lista->id) }}" class="btn btn-danger">Desactivado</a>
                                @endif
                            </td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@section('script')
<script type="text/javascript">
    var $table = $('#bootstrap-table');

    function operateFormatter(value, row, index) {
        return [
            '<a rel="tooltip" title="Edit" class="btn btn-link btn-warning table-action edit" href="javascript:void(0)">',
            '<i class="fa fa-edit"></i>',
            '</a>'
        ].join('');
    }

    $().ready(function() {
        window.operateEvents = {
            'click .view': function(e, value, row, index) {
                location.href ="/convocatoria/"+row.id;
            },
            'click .edit': function(e, value, row, index) {
                location.href ="/convocatoria/"+row.id+"/edit";
            },
            'click .remove': function(e, value, row, index) {
                console.log(row);
                $table.bootstrapTable('remove', {
                    field: 'id',
                    values: [row.id]
                });
            }
        };

        $table.bootstrapTable({
            toolbar: ".toolbar",
            clickToSelect: true,
            showRefresh: true,
            search: true,
            showToggle: true,
            showColumns: true,
            pagination: true,
            searchAlign: 'left',
            pageSize: 8,
            clickToSelect: false,
            pageList: [8, 10, 25, 50, 100],

            formatShowingRows: function(pageFrom, pageTo, totalRows) {
                //do nothing here, we don't want to show the text "showing x of y from..."
            },
            formatRecordsPerPage: function(pageNumber) {
                return pageNumber + " rows visible";
            },
            icons: {
                refresh: 'fa fa-refresh',
                toggle: 'fa fa-th-list',
                columns: 'fa fa-columns',
                detailOpen: 'fa fa-plus-circle',
                detailClose: 'fa fa-minus-circle'
            }
        });

        //activate the tooltips after the data table is initialized
        $('[rel="tooltip"]').tooltip();

        $(window).resize(function() {
            $table.bootstrapTable('resetView');
        });


    });
</script>
@endsection
@endsection

