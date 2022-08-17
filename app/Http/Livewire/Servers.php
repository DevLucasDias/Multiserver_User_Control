<?php

namespace App\Http\Livewire;

use App\Models\serverconnections;
use Livewire\Component;
use Livewire\WithPagination;

class Servers extends Component
{
   
    use WithPagination;

    public $paginate = '5';
    public $search = "";
    public $checked = [];

    public function deleteUnicoCliente($id)
    {
        $dadoserverconnection = serverconnections::findOrFail($id);
        $dadoserverconnection->delete();
    }


    public function render()
    {
        return view('livewire.servers', [
            'serverconnections' => serverconnections::procurar(trim($this->search))->simplePaginate($this->paginate),
        ]);
    }
}
