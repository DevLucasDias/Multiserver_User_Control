@extends('layout.styles')
@include('Layout.navname')
@include('Layout.navbar')
@section('content')
    <div >
        <div class="container" >
            <div class="row ">
                <div class="col-md-12">
                    <pabxusers-component></pabxusers-component>
                </div>
            </div>
        </div>
    </div>
@endsection
