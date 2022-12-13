<!-- Modal Eventos-->
<div class="modal fade" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2></h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body anuncio">
                <form id="editform" method="post">
                    @csrf
                    @method('put')
                    <h3>Editar Bloqueio Horário</h3>

                    <input type="date" placeholder="Data" name="date">
                    <input type="time" placeholder="Horas" name="time">
                    <div class="text-center"><button type="submit" class="btn btn-primary">Confirmar
                            Bloqueio</button></div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('[data-bs-target="#edit"]').click(function() {
        $('input[type=date]').val($(this).data('date'));
        $('input[type=time]').val($(this).data('time'));
        $('#editform').attr('action', $(this).data('href'));
        console.log( $(this).data('href') ) ;
    })
</script>
