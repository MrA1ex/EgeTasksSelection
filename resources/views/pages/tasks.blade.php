@extends('layout')

@section('title', $theme->name)

@section('content')

    <div class="content">
        <h2>Список заданий на тему "{{$theme->name}}"</h2>
    </div>

    <div class="js-tasks-list">
        <tasks-list
            load-url="{{ route('tasks.show', ['subject' => $sub, 'theme' => $theme]) }}">
        </tasks-list>
    </div>

@endsection('content')
