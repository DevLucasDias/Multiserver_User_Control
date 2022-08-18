<div>

    <div class="col s12">
        <div class="row">
            <div class="col s10">
                <input wire:model.debounce.300ms="search" type="text" class="form-control mb-2"
                    placeholder="Procurar por fornecedores ...">
            </div>

            <div class="col s1">
                <select wire:model="paginate" class="custom-select" id="grid-state">
                    <option>5</option>
                    <option>10</option>
                    <option>20</option>
                    <option>50</option>
                    <option>100</option>
                </select>
            </div>
            <div class="col s1">
                <button class="waves-effect waves-light btn modal-trigger" data-target="modalInsereServers"
                    href="#modalInsereServers"><i class="fa fa-circle-plus" aria-hidden="true"></i></button>
            </div>


        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Endereço de IP</th>
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($serverconnections as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->organization_name }}</td>
                            <td>{{ $data->apiaddress }}</td>
                            <td> <button class="waves-effect waves-light btn red"
                                    onclick="confirm('Tem Certeza que quer apagar este Produto?') || event.stopImmediatePropagation()"
                                    wire:click="deleteUnicoCliente('{{ $data->id }}')"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                                <button class="waves-effect waves-light btn green"><i class="fa fa-pen-to-square"
                                        aria-hidden="true"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            {{ $serverconnections->links() }}
        </div>


        
    </div>

   
            <div id="modalInsereServers" class="modal">
                <div class="modal-content">
                    <div>
                        <div class="row">
        
                            <div class="col s12 center-align">
            
                                <livewire:adiciona-servidores>
            
                            </div>
                        </div>
                    </div>
                    
                </div>
 
</div>
