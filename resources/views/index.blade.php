@extends('layouts.app')

@section('title', 'Task List')

@section('content')
<a href={{route('tasks.create')}}><button class="mb-4 cursor-pointer font-medium text-gray-700 text underline decoration-emerald-500">Create new Task</button></a>
    @forelse ($tasks as $task)
        <div class="card" class="mt-4 mb-4">
            <a href="{{route('tasks.show', ['task' => $task->id])}}" @class(['font-medium text-emerald-500','line-through font-bold' => $task->completed])>{{$task->title}}</a>
        </div>
    @empty
    <h3>There are no tasks</h3>
    @endforelse
    @if ($tasks->count())
    <nav class="mt-4">
        {{$tasks->links()}}
    </nav>
    @endif
@endsection
