@extends('layout.main')

@section('title', 'Task Homepage')

@section('content')
    @foreach($tasks as $task)

        <div class="row">
            <div class="col-sm-12">
                <h3>
                {{$task->name}}
                <small>
                {{$task->created_at}}
                </small>
                </h3>
                <hr>
                <p>
                    {{ $task->description }}
                </p>
                <h4>{{ $task->due_date }}</h4>
            </div>
        </div>
    @endforeach

    <div class="row justify-content-center">
        <div class="col-sm-6 text-center">
            {{ $tasks->links() }}
        </div>
    </div>

@endsection()