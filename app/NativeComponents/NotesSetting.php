<?php

namespace App\NativeComponents;

use App\Models\Note;
use Illuminate\View\View;
use Native\Mobile\Edge\NativeComponent;
use Native\Mobile\Facades\Dialog;

class NotesSetting extends NativeComponent
{
    public ?int $email = null;

    public function goHome(): void
    {
        $this->navigate('/');
    }

    public function confirmDeleteAll(): void
    {
        Note::truncate();
        Dialog::alert('Deleted', 'All notes have been deleted successfully');
        $this->navigate('/');
    }

    public function render(): View
    {
        return view('native.notes-setting');
    }
}
