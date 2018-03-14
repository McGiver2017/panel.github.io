<div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-notice">
        <div class="modal-content">
            <div class="modal-header no-border-header">
                <h3 class="modal-title" id="myModalLabel">Comunicados Importantes</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                @foreach($comunicadosModal as $comunicado)
                    <div class="instruction">
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Comunicado {{ $comunicado->id }}</h5>
                                <p> <?php
                                    echo substr($comunicado->descripcion,0,300).'...';
                                    ?></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-link" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>