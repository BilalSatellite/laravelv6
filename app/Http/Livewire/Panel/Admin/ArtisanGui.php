<?php

namespace App\Http\Livewire\Panel\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Artisan;

class ArtisanGui extends Component
{

    public $command;
    public $name;
    public $option='--resource';

    public $commands=[
        'make:controller',
        'make:model'

    ];


    // public function mount(){
    //     return $this->message;
    // }
    // call($command, array $parameters = [], $outputBuffer = null);



    public function run(){
    //   dd($command);

       Artisan::call($this->command,[
           'name'=> $this->name,
           '--resource'=> $this->option,
       ]);

    }

    public function render()
    {
        return view('livewire.panel.admin.artisan-gui',[
            'output'=>Artisan::output(),
        ]);
    }
}
