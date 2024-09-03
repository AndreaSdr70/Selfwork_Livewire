<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 1;

    public $myNum = 10;

    public $myNumN = 10;

    public function increment() //Actions
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }
 
    public function incrementByNum($num){ // Action parametrica
        $this->count+=$num;
        // $this->count= $this->count + $num;   
        
    }

    public function decrementByNum($num)
    { // Action parametrica
        $this->count-=$num;
        // $this->count= $this->count + $num;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
