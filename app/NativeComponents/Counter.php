<?php

namespace App\NativeComponents;

use Illuminate\View\View;
use Native\Mobile\Edge\NativeComponent;

class Counter extends NativeComponent
{
    // This is your "state" — data that the screen remembers
    public int $count = 0;

    // This is an "action" — a method the UI can call
    public function increment(): void
    {
        $this->count++;
    }

    public function decrement(): void
    {
        $this->count--;
    }

    // This returns the Blade view
    public function render(): View
    {
        return view('native.counter');
    }
}
