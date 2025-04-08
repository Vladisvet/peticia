<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserSearch extends Component
{
    public $name;
    public $message;
    public $marital_status;
    public $colors=[];
    public $fruit;
    public $num1;
    public $num2;
    public $sum;
    public $title;
    public $name1;
    public $infos = [];

    public function addTwoNumbers($num1,$num2){
        $this->sum = $num1 + $num2;
    }

    public function DisplayMessages($msg){
        $this->messages = $msg;
    }

    // public function mount($name=null){
    //     $this->name = $name;
    // }

    public function getSum(){
        $this->sum = $this->num1 + $this->num2;
    }

    public function mount(){
        $this->infos[] = 'Aplication is mounting...';
    }
    public function hydrate(){
        $this->infos[] = 'Aplication is hydrating...';
    }
    public function updating($name,$value){
        $this->infos[] = 'Aplication is updating...';
    }
    public function updated($name,$value){
        $this->infos[] = 'Aplication is updated...';
    }
    public function updatingName(){
        $this->infos[] = 'Aplication is updating name property...';
    }
    public function updatedName(){
        $this->infos[] = 'Aplication is updated name property...';
    }


    public function render()
    {
        return view('livewire.user-search');
    }
}
