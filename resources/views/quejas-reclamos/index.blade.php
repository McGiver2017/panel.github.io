@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                @include('quejas-reclamos.header',$datos)
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
                        <th data-field="dni" data-sortable="true">DNI</th>
                        <th data-field="nombres" data-sortable="true">Nombres</th>
                        <th data-field="apellidos" data-sortable="true">Apellidos</th>
                        <th data-field="correo" data-sortable="true">Correo</th>
                        <th data-field="tipo" data-sortable="true">Tipo</th>
                        <th data-field="telefono " data-sortable="true">Tel. Fijo / Celular</th>
                        <th data-field="estado " data-sortable="true">Estado</th>
                        <th data-field="actions" class="td-actions text-right" data-events="operateEvents" data-formatter="operateFormatter">Actions</th>
                    </thead>
                    <tbody>
                        @foreach($listas as $lista)
                        <tr>
                            <td></td>
                            <td>{{ $lista->id }}</td>
                            <td>{{ $lista->dni}}</td>
                            <td>{{ $lista->nombres}}</td>
                            <td>{{ $lista->apellidos}}</td>
                            <td>{{ $lista->correo}}</td>
                            <td>{{ $lista->tipo}}</td>
                            <td>{{ $lista->telefono}}</td>
                            <td>{{ $lista->estado}}</td>
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
            '<a rel="tooltip" title="View" class="btn btn-link btn-info table-action view" href="javascript:void(0)">',
            '<i class="fa fa-image"></i>',
            '</a>',
        ].join('');
    }

    $().ready(function() {
        window.operateEvents = {
            'click .view': function(e, value, row, index) {
                location.href ="/mensajes/"+row.id;
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

