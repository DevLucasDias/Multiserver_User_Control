@extends('Layout.layout')
@section('content')
    <div class="container">
        <div class="row card-panel">

            <div class="row col s12">
                <div class="row col s6">
                    <h1>Servidores</h1>
                </div>
                <div class="row col s6">
                    <br><br><br><a class="waves-effect waves-light btn modal-trigger" href="#modal-insert">Adicionar</a>
                </div>


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
                                            <input id="organization_name" name="organization_name" type="text"
                                                class="validate" required>
                                            <label for="organization_name">Nome do Cliente</label>
                                        </div>
                                        <div class="input-field col s3">
                                            <input id="databasename" name="databasename" type="text" class="validate"
                                                required>
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
                                            <input id="usernamesql" name="usernamesql" type="text" class="validate"
                                                required>
                                            <label for="usernamesql">Usuário</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input id="passwordsql" name="passwordsql" type="password" class="validate"
                                                >
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
                        {{-- Fim do formulario de inserção --}}
                    </div>

                </div>

            </div>
            <div>
                <servertable-component></servertable-component>
                {{-- <div id="modal-insert" class="modal col s7">
                    <h2>Chamou</h2>
                </div> --}}
            </div>
        </div>

    </div>

    </div>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.modal');
            M.Modal.init(elems);
        });

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll("select.form-control");
            M.FormSelect.init(elems);
        });
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll("select.tipo");
            M.FormSelect.init(elems);
        });
    </script>
@endsection
