<?php

namespace App\Http\Livewire\Panel\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Artisan;

class ArtisanGui extends Component
{

    public $command;
    public $name;
    public $option= false;
    

   

    protected $rules = [
        'name' => 'required',
        
    ];

    public function makecontroller(){
        $this->validate();
        Artisan::call('make:controller',[
           'name'=> $this->name.'Controller',
           '--resource'=> $this->option,
       ]);

       $this->reset(['command', 'name','option']);
    }

    public function makemodel(){
        $this->validate();
        Artisan::call('make:modle',[
           'name'=> $this->name,
           '--resource'=> $this->option,
       ]);

       $this->reset(['command', 'name','option']);
    }

    public function render()
    {
        return view('livewire.panel.admin.artisan-gui',[
            'output'=>Artisan::output(),
        ]);
    }
}
