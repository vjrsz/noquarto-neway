<div class="row" id="table-hover-row">
    <p class="display-none">Arraste para o lado direito para visualizar <img src="{{ asset('dash/img/seta-icon.svg') }}">
    </p>
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <!-- table hover -->
                @include('includes.errors')
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Nome:</th>
                                <th>E-mail:</th>
                                <th>Especificações</th>
                                <th>Data:</th>
                                <th>Horas:</th>
                                <th>Ação:</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schedulings as $sch)
                                <tr>
                                    <td class="text-bold-500">{{ $sch->name }}</td>
                                    <td>{{ $sch->email }}</td>
                                    <td class="text-bold-500" ><a target="_blanck" href="{{route('dashboard.admin.pdf.view', ['scheduling' => $sch->id])}}">PDF</a></td>
                                    <td>{{ date('d/m/Y', strtotime($sch->date)) }}</td>
                                    <td>{{ $sch->time }}</td>
                                    <td class="ver"><b><a type="button"
                                                data-href={{ route('dashboard.admin.scheduling.edit', ['scheduling' => $sch->id]) }}
                                                data-time={{ $sch->time }} data-date={{ $sch->date }}
                                                data-bs-toggle="modal" data-bs-target="#newDate">Confirmar</a></b></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Eventos-->
<div class="modal fade" id="newDate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="newDateLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2></h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body anuncio">
                <form id="newdateform" action="" method="post">
                    @method('put')
                    @csrf
                    <h3>Aprove o agendamento</h3>
                    <p>Aprover, ou adicione uma nova data ou horario.</p>
                    <input type="date" placeholder="Data" name="date">
                    <input type="time" placeholder="Horas" name="time">
                    <div class="text-center"><button type="submit" class="btn btn-primary">Confirmar
                            Agendamento</button></div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('[data-bs-target="#newDate"]').click(function() {
        $('input[type=date]').val($(this).data('date'));
        $('input[type=time]').val($(this).data('time'));
        $('#newdateform').attr('action', $(this).data('href'));
    })
</script>
