@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
<form method="POST" action="{{route('tasks.store')}}">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{old('title')}}" @class(['border-red-500' => $errors->has('title')])>
        @error('title')
            <p class="error">{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" rows="5" @class(['border-red-500' => $errors->has('description')])>{{old('description')}}</textarea>
        @error('description')
            <p class="error">{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="long_description">Long Description</label>
        <textarea name="long_description" id="long_description" rows="10" @class(['border-red-500' => $errors->has('long_description')])>{{old('long_description')}}</textarea>
        @error('long_description')
            <p class="error">{{$message}}</p>
        @enderror
    </div>
    <div class="flex gap-2 items-center">
    <button type="submit" class="btn">Create Task</button>
    <a href="{{route('tasks.index')}}" class="btn">Cancel</a>
</div>
</form>
@endsection
