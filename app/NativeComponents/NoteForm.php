<?php

namespace App\NativeComponents;

use App\Models\Note;
use Illuminate\View\View;
use Native\Mobile\Edge\NativeComponent;
use Native\Mobile\Facades\Dialog;

class NoteForm extends NativeComponent
{
    public string $title = '';
    public string $body = '';
    public ?int $noteId = null;

    public function mount(): void
    {
        // If we have an {id} in the URL → editing
        if ($id = $this->param('id')) {
            $note = Note::findOrFail($id);

            $this->noteId = $note->id;
            $this->title = $note->title;
            $this->body = $note->body ?? '';
        }
    }

    public function save(): void
    {
        if ($this->noteId) {
            // UPDATE
            Note::where('id', $this->noteId)->update([
                'title' => $this->title,
                'body' => $this->body,
            ]);
            Dialog::alert('Updated', 'Your note have been updated');
            $this->navigate('/');
        } else {
            // CREATE
            if ($this->title == '') {
                Dialog::alert('Warning', 'Give your note a name');
                $this->navigate('/');
            } else {
                Note::create([
                    'title' => $this->title,
                    'body' => $this->body,
                ]);
                Dialog::alert('Created', 'Your note have been created');
                $this->navigate('/');
            }
        }

        // back to list
    }

    public function goBack(): void
    {
        $this->navigate('/');
    }

    public function render(): View
    {
        return view('native.note-form', [
            'isEditing' => (bool) $this->noteId,
        ]);
    }
}
