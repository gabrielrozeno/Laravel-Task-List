<?php

use Illuminate\Support\Facades\Route;


class Task
{
    public function __construct(
        public int $id,
        public string $title,
        public string $description,
        public ?string $long_description,
        public bool $completed,
        public string $created_at,
        public string $updated_at
    ) {
    }
}


Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function ()  {
    return view('index', [
        'tasks'=> \App\Models\Task::latest()->get(),
    ]);
})->name('tasks.index');

Route::get('/task/{id}', function ($id)  {
        return view('single-task', [
            'task' =>     \App\Models\Task::findOrFail($id)
        ]);
})->name('task.show');
