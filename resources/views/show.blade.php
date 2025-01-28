@extends('layouts.app')

@section('title', $task->title)

@section('content')
<p>
    @if ($task->completed)
        Completed
    @else
        Not Completed
    @endif
</p>
<p>{{$task->description}}</p>
@if ($task->long_description)
<p>{{$task->long_description}}</p>
@endif
<p>Created at {{$task->created_at->format('d/m/Y H:i:s')}}</p>
<p>Updated at {{$task->updated_at->format('d/m/Y H:i:s')}}</p>
<div>
    <form action="{{route('tasks.toggle-complete', ['task' => $task])}}" method="POST">
        @csrf
        @method('PUT')
        <button type="submit">
            @if ($task->completed)
                Mark as not Completed
            @else
                Mark as Completed
            @endif
        </button>
    </form>
</div>
<div>
<a href="{{route('tasks.index')}}"><button>Go back</button></a>
<a href="{{route('tasks.edit', ['task' => $task->id])}}"><button>Edit Task</button></a>
<form action="{{route('tasks.destroy', ['task' => $task->id])}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn">Delete Task</button>
</form>
</div>
@endsection
