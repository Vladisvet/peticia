<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Petition;

class BackendPetitionsliwe extends Component
{
    use WithPagination;
    public $searchPet = '';

    public function render()
    {
        $searchPet = '%'.$this->searchPet.'%';
        return view('livewire.backend-petitionsliwe',[
            'petitions' => Petition::where('subdomain','LIKE',$searchPet)
            ->orWhere('predseda_name','LIKE',$searchPet)
            ->orWhere('vybor_names','LIKE',$searchPet)
            ->orWhere('title','LIKE',$searchPet)
            ->orderBy('id','ASC')
            ->paginate(2)] );
    }
}

