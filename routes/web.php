<?php

use App\Livewire\TicketScannerComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', TicketScannerComponent::class)->name('scan.ticket');
