@extends('layout.app')
@include('Layout.navname')
@include('Layout.navbar')
@section('content')
    <div style="background-color: gray">
        <div class="container" style="background-color: lightgray">
            <div class="row ">
                <div class="col-md-12">
                    <!-- Modal Trigger -->
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

                    <!-- Modal Structure -->
                    <div id="modal1" class="modal">
                        <div class="modal-content">
                            <h4>Modal Header</h4>
                            <p>A bunch of text</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
