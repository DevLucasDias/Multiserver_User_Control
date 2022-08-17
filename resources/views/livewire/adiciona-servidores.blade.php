<div>
    <div id="modal-insert" class="modal col s7">
        <div class="modal-content">
            {{-- Inserir formulario --}}
            <div class="row">
                <h5>Inserir Servidores</h5>
                <form class="col s12" action="/AddServers" method="post">
                    @csrf
                    <div class="row">
                        <div class="row ">
                            <div class="input-field col s6">
                                <input id="organization_name" name="organization_name" type="text" class="validate"
                                    required>
                                <label for="organization_name">Nome do Cliente</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="databasename" name="databasename" type="text" class="validate" required>
                                <label for="databasename">Nome do Banco</label>
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
                            <h5>Acesso ao SQL</h5>
                            <div class="input-field col s4">
                                <input id="usernamesql" name="usernamesql" type="text" class="validate" required>
                                <label for="usernamesql">Usuário</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="passwordsql" name="passwordsql" type="password" class="validate">
                                <label for="passwordsql">Senha</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="ipadress" name="ipadress" type="text" class="validate" required>
                                <label for="ipadress">IP do Servidor</label>
                            </div>
                        </div>

                        <div class="row">
                            <button class="btn" type="submit" name="action">Adicionar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


