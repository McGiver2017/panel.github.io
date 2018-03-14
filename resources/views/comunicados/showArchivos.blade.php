    <div class="card bootstrap-table">
        <div class="card-body table-full-width">
            <div class="toolbar">
                <!--        Here you can write extra buttons/actions for the toolbar              -->
            </div>
            <table id="archivos" class="table">
                <thead>
                <th data-field="state" data-checkbox="true"></th>
                <th data-field="id" class="text-center">ID</th>
                <th data-field="descripcion" data-sortable="true">Descripcion</th>
                <th data-field="ruta" data-sortable="true">Ruta</th>
                <th data-field="tipo" data-sortable="true">Tipo</th>
                </thead>
                <tbody>
                @foreach($archivos as $lista)
                    <tr>
                        <td></td>
                        <td>{{ $lista->id }}</td>
                        <td>{{ $lista->descripcion}}</td>
                        <td>{{ $lista->archivo}}</td>
                        <td>{{ $lista->tipo}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@section('script')
<script>

    var $archivos = $('#archivos');

    $archivos.bootstrapTable({
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
</script>
    @endsection