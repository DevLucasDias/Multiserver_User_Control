<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use Livewire\Component;

use App\Models\pabxusers;
use phpDocumentor\Reflection\Types\This;
use Illuminate\Support\Facades\DB;



class UsuariosPabx extends Component
{
    use WithPagination;

    public $paginate = '5';
    public $search = "";
    public $checked = [];

    public function deleteUnicoUsuario($id)
    {
        $dadopabxuser = pabxusers::findOrFail($id);
        $dadopabxuser->delete();
    }


    public function render()
    {
        return view('livewire.usuarios-pabx', [
            'pabxusuarios' => pabxusers::procurar(trim($this->search))->Paginate($this->paginate),
        ]);
    }
}
