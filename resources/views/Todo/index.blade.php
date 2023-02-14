@extends('master')

@section('content')

    <div class="container">
        <div class="center">
            <p>List of Todos</p>
            <a href="{{ url('/todo_add') }}">Add New post </a>
        </div>

        <div>
            <ul>
                @foreach($todos as $todo)
                <li>{{ $todo->post }}</li>
                @endforeach
            </ul>
        </div>

    </div>

@endsection
