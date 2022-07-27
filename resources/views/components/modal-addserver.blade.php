@extends('layout.styles')
@include('Layout.navname')
@include('Layout.navbar')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                {{-- Inserir formulario --}}
                <div class="row card-panel ">
                    <h5>Inserir Servidores</h5>
                    <form class="col s12" action="/AddServers" method="post">
                        @csrf
                        <div class="row">
                            <div class="row ">
                                <div class="input-field col s12">
                                    <input id="servername" name="servername" type="text" class="validate" required>
                                    <label for="servername">Nome do Cliente</label>
                                </div>
                            </div>
                            <div class="row">
                                <h5>Acesso ao SQL</h5>
                                <div class="input-field col s4">
                                    <input id="username" name="username" type="text" class="validate" required>
                                    <label for="username">Usuário</label>
                                </div>
                                <div class="input-field col s4">
                                    <input id="password" name="password" type="password" class="validate" required>
                                    <label for="password">Senha</label>
                                </div>
                                <div class="input-field col s4">
                                    <input id="IP" name="IP" type="text" class="validate" required>
                                    <label for="IP">IP do Servidor</label>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="row">
                                <div class="input-field col s12">
                                    <h5>Criar em que tipo de cliente?</h5>
                                    <div class="switch col s6">
                                        <h6>Clientes PJ</h6>
                                        <label>
                                            Não
                                            <input type="checkbox" id="pj" name="pj">
                                            <span class="lever"></span>
                                            Sim
                                        </label>
                                    </div>
                                    <div class="switch col s6">
                                        <h6>Samu</h6>
                                        <label>
                                            Não
                                            <input type="checkbox" id="samu" name="samu">
                                            <span class="lever"></span>
                                            Sim
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Adicionar
                                <i class="material-icons right"></i>
                            </button>
                        </div>
                </div>
                </form>
            </div>
            {{--  --}}
        </div>
    </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            M.FormSelect.init(elems);
        });
    </script>
@endsection
