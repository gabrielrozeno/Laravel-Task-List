@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    @forelse ($tasks as $task)
        <div class="card">
            <a href="{{route('tasks.show', ['task' => $task->id])}}">{{$task->title}}</a>
        </div>
    @empty
    <h3>There are no tasks</h3>
    @endforelse
    <a href={{route('tasks.create')}}><button>Create new Task</button></a>
@endsection
