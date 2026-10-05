<?php

use App\NativeComponents\Counter;
use App\NativeComponents\Home;
use App\NativeComponents\NoteForm;
use App\NativeComponents\NotesSetting;
use Illuminate\Support\Facades\Route;

Route::native('/', Home::class);
Route::native('/counter', Counter::class);
Route::native('/notes/create', NoteForm::class)->name('notes.create');
Route::native('/notes/{id}/edit', NoteForm::class)->name('notes.edit');
Route::native('/notes/settings', NotesSetting::class)->name('notes.settings');
