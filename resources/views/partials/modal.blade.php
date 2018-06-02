<!-- Modal / Ventana / Overlay en HTML -->
<div id="victorModal{{$trade->id}}" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">¿Estás seguro?</h4>
            </div>
            <div class="modal-body">
                <p>¿Seguro que quieres borrar este trade?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <a href="{{ route('trades.destroy' , ['trade_id' => $trade->id]) }}" type="button" class="btn btn-danger">Eliminar</a>
            </div>
        </div>
    </div>
</div>