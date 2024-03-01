<?php

namespace App\Livewire;

use App\Models\Placement;
use Livewire\Component;

class ShowPlacements extends Component
{
    public function render()
    {
        $placements = Placement::orderBy('date','DESC')->first();
        return view('livewire.show-placements',[
            'placements' => $placements
        ]);
    }
}
