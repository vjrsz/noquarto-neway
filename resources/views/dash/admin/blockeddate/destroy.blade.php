<!-- Modal Eventos-->
<div class="modal fade" id="destroy" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="destroyLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2></h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body anuncio">
                <form id="destroyform" method="post">
                    @csrf
                    @method('delete')
                    <h3>Deletar Bloqueio Horário</h3>

                    <div class="text-center"><button type="submit" class="btn btn-danger">Confirmar</button></div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('[data-bs-target="#destroy"]').click(function() {
        $('#destroyform').attr('action', $(this).data('href'));
        console.log( $(this).data('href') ) ;
    })
</script>
