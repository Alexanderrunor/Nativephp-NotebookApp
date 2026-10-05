<?php

namespace App\NativeComponents;

use App\Models\Note;
use Illuminate\View\View;
use Native\Mobile\Edge\NativeComponent;
use Native\Mobile\Facades\Browser;
use Native\Mobile\Facades\PushNotifications;

class Home extends NativeComponent
{
    public function openDocs(): void
    {
        Browser::inApp('https://nativephp.com/docs/mobile');
    }

    public function openDiscord(): void
    {
        Browser::open('https://discord.gg/nativephp');
    }

    public function openCreate(): void
    {
        $this->navigate('/notes/create');
    }

    public function openSettings(): void
    {
        $this->navigate('/notes/settings');
    }

    public function openEdit(int $id): void
    {
        $this->navigate($this->route('notes.edit', ['id' => $id]));
    }

    public function delete(int $id): void
    {
        Note::findOrFail($id)->delete();
        // screen re-renders automatically
    }

    public function openGitHub(): void
    {
        Browser::open('https://github.com/NativePHP');
    }

    public function render(): View
    {
        $notes = Note::all();
        // Triggers the OS prompt (or retrieves existing token if already granted)
        PushNotifications::getToken();
        return view('native.home', compact('notes'));
    }
}
