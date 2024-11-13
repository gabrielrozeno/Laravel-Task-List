<div>
    <h1>List of Tasks</h1>
        @forelse ($tasks as $task)
        <div class="card">
            <a href="{{route('task.show', ['id' => $task->id])}}">{{$task->title}}</a>
        </div>
    @empty
    <h3>There are no tasks</h3>
    @endforelse
</div>
