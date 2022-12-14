<!-- Modal Eventos-->
<div class="modal fade" id="store" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="storeLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2></h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body anuncio">
                <form id="storeform" action={{route("dashboard.admin.blockeddate.store")}} method="post">
                    @csrf
                    <h3>Bloquear Horário</h3>
                    <p>Bloqueie um horário</p>
                    <input type="date" placeholder="Data" name="date">
                    <div class="text-center"><button type="submit" class="btn btn-primary">Confirmar
                            Bloqueio</button></div>
                </form>
            </div>
        </div>
    </div>
</div>