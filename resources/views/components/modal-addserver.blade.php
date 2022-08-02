@extends('layout.styles')
@include('Layout.navname')
@include('Layout.navbar')
@section('content')
<div id="modal1" class="modal col s7">
    <div class="modal-content">
                {{-- Inserir formulario --}}
                <div class="row">
                    <h5>Inserir Servidores</h5>
                    <form class="col s12" action="/AddServers" method="post">
                        @csrf
                        <div class="row">
                            <div class="row ">
                                <div class="input-field col s8">
                                    <input id="organization_name" name="organization_name" type="text" class="validate" required>
                                    <label for="organization_name">Nome do Cliente</label>
                                </div>
                                <div class="input-field col s4">
                                    <input id="databasename" name="databasename" type="text" class="validate" required>
                                    <label for="databasename">Nome do Banco</label>
                                </div>
                            </div>
                            <div class="row">
                                <h5>Acesso ao SQL</h5>
                                <div class="input-field col s4">
                                    <input id="usernamesql" name="usernamesql" type="text" class="validate" required>
                                    <label for="usernamesql">Usuário</label>
                                </div>
                                <div class="input-field col s4">
                                    <input id="passwordsql" name="passwordsql" type="password" class="validate" >
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
                {{--  --}}
    </div>
            </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            M.FormSelect.init(elems);
        });

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.modal');
            M.Modal.init(elems);
        });
    </script>
@endsection
