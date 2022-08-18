<div>
    <form class="col s12" action="/AddPabxUsers" method="post">
        @csrf
        <div class="row">
            <div class="row ">
                <div class="input-field col s12">
                    <input id="name" name="name" type="text" class="validate" required>
                    <label for="name">Nome Completo</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="username" name="username" type="text" class="validate" required>
                    <label for="username">Usuário</label>
                </div>
                <div class="input-field col s6">
                    <input id="password" name="password" type="password" class="validate" required>
                    <label for="password">Senha</label>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="row">
                <div class="input-field col s6">
                    <h5>Criar em que tipo de cliente?</h5>
                    <div class="switch">
                        <p>Clientes PJ</p>
                        <label>
                            Não
                            <input type="checkbox" id="pj" name="pj" required>
                            <span class="lever"></span>
                            Sim
                        </label>
                    </div>
                    <div class="switch">
                        <p>Samu</p>
                        <label>
                            Não
                            <input type="checkbox" id="samu" name="samu">
                            <span class="lever"></span>
                            Sim
                        </label>
                    </div>
                </div>
                <div class="input-field col s6 ">
                    <h5>Qual acesso?</h5>
                    <div class="input-field col s12">
                        <select id="acesso" name="acesso" class="acesso" required>
                            <option value="" disabled selected>Acesso</option>
                            <option value="root">Root</option>
                            <option value="admin">Administrador</option>
                            <option value="supervisor">Supervisor</option>
                        </select>
                        <label>Defina a liberação do usuário?</label>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <button class="btn " type="submit" name="action">Adicionar</button>
        </div>
</div>
