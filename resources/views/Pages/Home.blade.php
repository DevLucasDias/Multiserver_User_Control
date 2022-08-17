@extends('Layout.layout')
@section('content')
    <div>
        <div class="container">
            <div class="row card-panel">
                <div class="col-md-12">

                    <h1>Bem Vindo</h1>


                    <input type="text" class="form-input" id="ipv4" name="ipv4" placeholder="192.168.0.1" />
                    <script>
                        var ipv4_address = $('#ipv4');
                        ipv4_address.inputmask({
                            alias: "ip",
                            greedy: false //The initial mask shown will be "" instead of "-____".
                        });
                    </script>

                </div>
            </div>
        </div>
    </div>
@endsection
