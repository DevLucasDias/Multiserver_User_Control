@extends('layout.styles')
@section('content')
    <div class="container">
        <div class="row card-panel">

            <div class="row col s12">
                <div class="row col s6">
                    <h1>Servidores</h1>
                </div>
                <div class="row col s6">
                    <br><br><br><a class="waves-effect waves-light btn modal-trigger" href="#modal1">Adicionar</a>
                </div>
                




                    
                    <div id="modal1" class="modal col s7">
                        <div class="modal-content">
                            {{-- Inserir formulario --}}
                            <div class="row">
                                <h5>Inserir Servidores</h5>
                                <form class="col s12" action="/AddServers" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="row ">
                                            <div class="input-field col s12">
                                                <input id="organization_name" name="organization_name" type="text"
                                                    class="validate" required>
                                                <label for="organization_name">Nome do Cliente</label>
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
                                                    required>
                                                <label for="passwordsql">Senha</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <input id="ipadress" name="ipadress" type="text" class="validate " placeholder="172.16.0.XXX"  required>
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

    </script>
@endsection
