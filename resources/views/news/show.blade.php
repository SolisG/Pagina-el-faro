@php
    $layout = 'layouts.app';
@endphp

@extends($layout)

@section('content')
    <div class="container">
        <h1>{{ $news->title }}</h1>
        <p>{{ $news->content }}</p>
        <p>Autor: {{ $news->author }}</p>
        <p>Fecha: {{ $news->date }}</p>
        <!-- Add more information or formatting as needed -->
    </div>
@endsection
