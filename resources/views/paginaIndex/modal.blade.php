<div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-notice">
        <div class="modal-content">
            <div class="modal-header no-border-header">
                <h3 class="modal-title" id="myModalLabel">Comunicados Importantes</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                @foreach($comunicadosModal as $comunicado)
                    <div>
                        <img src="{{$comunicado->imagen}}" alt="Rounded Image" class="img-rounded img-responsive">
                    </div>
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-link" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>