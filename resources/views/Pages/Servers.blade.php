@extends('Layout.layout')
@section('content')
    <div class="container">
        <div class="card-panel">
            <h2>Conexões com Servidores</h2>
            <livewire:servers>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        window.addEventListener('recarregaPagina', event => {
            document.location.reload(true);
        })

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
