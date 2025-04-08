<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class BackendUserslw extends Component
{
    use WithPagination;
    public $searchTerm = '';
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        return view('livewire.backend-userslw',['users'=>User::where('name','LIKE',$searchTerm)
        ->orWhere('email','LIKE',$searchTerm)
        ->orderBy('id','ASC')
        ->paginate(5)] );
    }
}
