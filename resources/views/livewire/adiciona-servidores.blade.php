<div>
    {{-- Inserir formulario --}}
    <div class="row">
        <h5>Inserir Servidores</h5>
        <form class="col s12" action="/AddServers" method="post">
            @csrf
            <div class="row">
                <div class="row ">
                    <div class="input-field col s9">
                        <input id="organization_name" name="organization_name" type="text" class="validate" required>
                        <label for="organization_name">Nome do Cliente</label>
                    </div>

                    <div class="input-field col s3">
                        <select class="tipo" name="typeofclient">
                            <option value="" disabled selected>Tipo de Cliente</option>
                            <option value="samu">Samu</option>
                            <option value="pj">Cliente PJ</option>
                        </select>
                    </div>

                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="apiaddress" name="apiaddress" type="text" class="validate" required>
                        <label for="apiaddress">Endereço API</label>
                    </div>

                    <div class="input-field col s6">
                        <input id="token" name="token" type="text" class="validate" >
                        <label for="token">Token API</label>

                    </div>

                </div>

                <div class="row">
                    <button class="btn" type="submit" name="action">Adicionar</button>
                </div>
            </div>
        </form>
    </div>
</div>
