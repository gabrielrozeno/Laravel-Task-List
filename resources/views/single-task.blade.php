@extends('layouts.app')

@section('title', $task->title)

@section('content')
<p>{{$task->description}}</p>
@if ($task->long_description)
<p>{{$task->long_description}}</p>
@endif
<p>Created at {{$task->created_at}}</p>
<a href="{{route('tasks.index')}}">Go back</a>
@endsection