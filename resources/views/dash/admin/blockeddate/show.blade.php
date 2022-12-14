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
                                <th>ID :</th>
                                <th>Data :</th>
                                <th>Ação 1 : </th>
                                <th>Ação 2 : </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blockeddates as $bd)
                                <tr>
                                    <td class="text-bold-500">{{ $bd->id }}</td>
                                    <td>{{ date('d/m/Y', strtotime($bd->date)) }}</td>
                                    <td>
                                        <a type="button"
                            data-href={{ route('dashboard.admin.blockeddate.edit', ['blockeddate' => $bd->id]) }}
                            data-time={{ $bd->time }} data-date={{ $bd->date }}
                            data-bs-toggle="modal" data-bs-target="#edit">Editar</a>
                                    </td>
                                    <td>
                                        <a type="button"
                            data-href={{ route('dashboard.admin.blockeddate.destroy', ['blockeddate' => $bd->id]) }}
                            data-bs-toggle="modal" data-bs-target="#destroy">Excluir</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


