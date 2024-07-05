<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Models\Note;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, "index"])->name("welcome");

Route::get('/dashboard', function () {
    $notes = Note::query()->orderBy('created_at', 'desc')->paginate(12);
    return view('dashboard', ['notes' => $notes]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Notes route
    // Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');
    // Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');
    // Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');
    // Route::get('/notes/{id}', [NoteController::class, 'show'])->name('notes.show');
    // Route::post('/notes/{id}/edit', [NoteController::class, 'edit'])->name('notes.edit');
    // Route::put('/notes/{id}', [NoteController::class, 'update'])->name('notes.update');
    // Route::delete('/notes/{id}', [NoteController::class, 'destroy'])->name('notes.destroy');

    Route::resource('notes', NoteController::class);
});

require __DIR__ . '/auth.php';
