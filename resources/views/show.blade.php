@extends('layouts.app')

@section('title', $task->title)

@section('content')
<a href="{{route('tasks.index')}}" ><button class="link">⬅ Go Back</button></a>
<p @if ($task->completed) class="text-emerald-500 font-medium mb-4" @else class="text-red-500 font-medium mb-4" @endif>
    @if ($task->completed)
        Completed
    @else
        Not Completed
    @endif
</p>
<p class="mb-4 text-slate-700">{{$task->description}}</p>
@if ($task->long_description)
<p class="mb-4 text-slate-700">{{$task->long_description}}</p>
@endif
<div>
<p class="mb-4 text-sm text-slate-500">Created {{$task->created_at->diffForHumans()}} • Updated {{$task->updated_at->diffForHumans()}}</p>
</div>
<div class="container flex flex-row gap-2 items-center">
    <form action="{{route('tasks.toggle-complete', ['task' => $task])}}" method="POST">
        @csrf
        @method('PUT')
        <button type="submit" class="btn">
            @if ($task->completed)
                Mark as not Completed
            @else
                Mark as Completed
            @endif
        </button>
    </form>


<a href="{{route('tasks.edit', ['task' => $task->id])}}"><button class="btn">Edit Task</button></a>

<form action="{{route('tasks.destroy', ['task' => $task->id])}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn">Delete Task</button>
</form>

</div>
@endsection
