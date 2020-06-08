@extends('layout')

@section('title', 'ЕГЭ')

@section('content')

    <div class="columns">
        @foreach($subjects->chunk( ceil($subjects->count() / 2) ) as $chunk)
            <div class="column">
                @foreach($chunk as $subject)
                    @include('components.subject-box', ['subject' => $subject])
                @endforeach
            </div>
        @endforeach
    </div>

@endsection('content')
