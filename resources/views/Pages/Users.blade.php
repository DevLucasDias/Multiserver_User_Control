@extends('layout.styles')
@section('content')
    <div>

        <div class="container">
            <div class="row card-panel ">
                <div class="col-md-12">

                    <div class="row col s6">
                        <h1>Usuarios</h1>
                    </div>
                    <div class="row col s6">
                        <br><br><br><a class="waves-effect waves-light btn modal-trigger" href="#modal1">Adicionar</a>
                    </div>



                    <!-- Modal Structure -->
                    <div id="modal1" class="modal col s8" >
                        <div class="modal-content">
                            <div class="row">
                                <h5>Inserir usuário dos PBX</h5>
                                <form class="col s12" action="/AddPabxUsers" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="row ">
                                            <div class="input-field col s12">
                                                <input id="name" name="name" type="text" class="validate"
                                                    required>
                                                <label for="name">Nome Completo</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="username" name="username" type="text" class="validate"
                                                    required>
                                                <label for="username">Usuário</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="password" name="password" type="password" class="validate"
                                                    required>
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

                                </form>
                            </div>
                        </div>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                var elems = document.querySelectorAll("select.acesso, select.form-control");
                                M.FormSelect.init(elems);
                            });
                        </script>



                    </div>

                </div>


                <pabxusers-component></pabxusers-component>
                
            </div>
        </div>
    </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.modal');
            M.Modal.init(elems);
        });
    </script>
@endsection
