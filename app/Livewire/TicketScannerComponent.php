<?php

namespace App\Livewire;

use Livewire\Attributes\Locked;
use Livewire\Component;

class TicketScannerComponent extends Component
{
    #[Locked]
    public null|string $barcode = null;

    public function sendBarcodeData(string $barcode): void
    {
        //perform your validation

        $this->barcode = $barcode;
    }

    public function render()
    {
        return view('livewire.ticket-scanner-component');
    }
}
