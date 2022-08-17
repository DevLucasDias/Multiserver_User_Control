
<div>
    <div class="row">
        <div class="col s10">
            <input wire:model.debounce.300ms="search" type="text" class="form-control mb-2"
                placeholder="Procurar por fornecedores ...">
        </div>

        <div class="col s1">
            <select wire:model="paginate" class="custom-select" id="grid-state" >
                <option>5</option>
                <option>10</option>
                <option>20</option>
                <option>50</option>
                <option>100</option>
            </select>
        </div>
        <div class="col s1">
            <button class="waves-effect waves-light btn blue"><i class="fa fa-circle-plus" aria-hidden="true"></i></button>
        </div>
    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Usuário</th>
                                <th>Senha</th>
                                <th>Ação</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($pabxusuarios as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->user }}</td>
                                <td>{{ $data->password }}</td>
                                <td> <button class="waves-effect waves-light btn red"
                                        onclick="confirm('Tem Certeza que quer apagar este Produto?') || event.stopImmediatePropagation()"
                                        wire:click="deleteUnicoUsuario('{{ $data->id }}')"><i
                                            class="fa fa-trash" aria-hidden="true"></i></button>
                                    <button class="waves-effect waves-light btn green"><i class="fa fa-pen-to-square" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                    {{ $pabxusuarios->links() }}


</div>