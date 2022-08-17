@extends('Layout.layout')
@section('content')
    <div class="container">
        <div class="card-panel">
            <livewire:usuarios-pabx>
        </div>
    </div>

    @livewireScripts
    <script>
        window.addEventListener('recarregaPagina', event => {
  document.location.reload(true);
})

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    M.FormSelect.init(elems);
  });
   </script>
@endsection

