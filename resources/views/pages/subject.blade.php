@extends('layout')

@section('title', $name)

@section('content')

    <div class="content">
        <h2>{{$name}} cписок тем</h2>
    </div>

    <table class="table is-fullwidth is-hoverable is-striped">
        <thead>
        <tr>
            <th>Тема</th>
            <th class="has-text-right">Количество заданий</th>
        </tr>
        </thead>
        <tbody>
        @foreach($themes as $theme)
            <tr class="link-tr" onclick="location.href='{{$theme->path()}}';">
                <td>{{$theme->id}}. {{$theme->name}}</td>
                <td class="has-text-right">{{$theme->tasks_count}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection('content')
