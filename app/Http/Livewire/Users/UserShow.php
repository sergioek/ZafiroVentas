<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Traits\HasRoles;

class UserShow extends Component
{

    public $search;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        
        $users= User::whereHas("roles", function($q){ $q->where("name", "EMPLOYEE"); })->where('name','like','%'.$this->search.'%')->orderby('name','ASC')->Paginate(10);

        return view('livewire.users.user-show',compact('users'));
    }
}
