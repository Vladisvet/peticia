<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\orderBy;
use App\Models\Petition;
use App\Models\Category;
use App\Models\Sign_petition;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
//use App\Http\Livewire\Collection;



class ZoznamSearchliwe extends Component
{
    use WithPagination;
    public function getQueryString()
    {
        return [ ];
    }
    public $searchCategory = '';
    public $searchTitle = '';
    public $searchName = '';
    public $sortBy ;
    //public $sortByAmountSigns ;
    public $perPage;
    //public $countpet;
    // protected $rules = [
    //     'searchTitle' => 'min:2',
    //     'searchName' => 'min:2',
    // ];



    public function mount()
    {
        $this->sortBy = "default";
        //$this->sortByAmountSigns = "default";
        $this->perPage = "6";
        //$this->searchCategory = "politika";
    }

    public function updatingSearchCategory()
    {$this->resetPage();}
    public function updatingSearchTitle()
    {$this->resetPage();}
    public function updatingSearchName()
    {$this->resetPage();}
    public function updatingSortBy()
    {$this->resetPage();}
   // public function updatingSortByAmountSigns()
    //{$this->resetPage();}

    public function resetFilters()
    {$this->reset(['searchCategory', 'searchTitle', 'searchName']);}

    public function render()
    {
        $searchCategory = '%' . $this->searchCategory . '%';
        $searchTitle = '%' . $this->searchTitle . '%';
        $searchName = '%' . $this->searchName . '%';
        //$sortBy = '%' . $this->sortBy . '%';

        if ($this->sortBy == 'latest') {
            $petitions = Petition::
            //$petitions = DB::table('petitions')->selct('*')->
            join('categories', 'categories.id', '=', 'petitions.category_id')
                ->select('petitions.*', 'categories.category')
                ->where('category', 'LIKE', $searchCategory)
                ->where('title', 'LIKE', $searchTitle)
                ->where('predseda_name', 'LIKE', $searchName)
                ->orderBy('petitions.id', 'desc')->paginate(3);
        } else if ($this->sortBy == 'oldest') {
            $petitions = Petition::join('categories', 'categories.id', '=', 'petitions.category_id')
                ->select('petitions.*', 'categories.category')
                ->where('category', 'LIKE', $searchCategory)
                ->where('title', 'LIKE', $searchTitle)
                ->where('predseda_name', 'LIKE', $searchName)
                ->orderBy('petitions.id', 'asc')->paginate(3);
        }
        else if ($this->sortBy == 'najviac_pod') {
            $petitions = $collection  = Petition::
            join('users', 'users.id', '=', 'petitions.user_id')->
            join('categories', 'categories.id', '=', 'petitions.category_id')
            ->orderBy('petitions.user_id', 'asc')
            ->select('categories.category', 'petitions.*')
            ->where('category', 'LIKE', $searchCategory)
            ->where('title', 'LIKE', $searchTitle)
            ->where('predseda_name', 'LIKE', $searchName)
            ->paginate(3)
            ;
            //$petitions = $collection;
        }
        else if ($this->sortBy == 'najmenej_pod') {
            $petitions = $collection  = Petition::
            join('users', 'users.id', '=', 'petitions.user_id')->
            join('categories', 'categories.id', '=', 'petitions.category_id')
            ->orderBy('petitions.user_id', 'desc')
            ->select('categories.category', 'petitions.*')
            ->where('category', 'LIKE', $searchCategory)
            ->where('title', 'LIKE', $searchTitle)
            ->where('predseda_name', 'LIKE', $searchName)
            ->paginate(3)
            ;
            //$petitions = $collection;
        }
         else {
            $petitions =
            DB::table('petitions')
            ->join('categories', 'categories.id', '=', 'petitions.category_id')
                ->select('categories.category', 'petitions.*')
                ->where('category', 'LIKE', $searchCategory)
                ->where('title', 'LIKE', $searchTitle)
                ->where('predseda_name', 'LIKE', $searchName)
                ->paginate(3)
                ;
        }






    //     if ($this->sortByAmountSigns == 'najviac_pod') {
    //         $countpet = Sign_petition::join('users', 'sign_petitions.user_id', 'users.id')
    //     ->where('user_id','=', 'users.id')
    //     ->chunkById('desc')
    //             //->orderBy('petitions.id', 'desc')
    //             ->paginate(2)
    //             ;
    // } else if ($this->sortByAmountSigns == 'najmenej_pod') {
    //     $countpet = Sign_petition::
    //     join('users', 'sign_petitions.user_id', 'users.id')
    //     ->where('user_id','=', 'users.id')
    //     ->chunkById('asc')
    //             //->orderBy('petitions.id', 'asc')
    //             ->paginate(2)
    //         ;}




        return view(
            'livewire.zoznam-searchliwe',
            [
                'petitions' => $petitions,
                //'countpet' => $countpet,

                'categories' => Category::orderBy('id', 'desc')
                    ->get(),
            ]
        );



    }
}


