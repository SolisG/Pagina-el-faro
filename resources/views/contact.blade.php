@extends('layouts.app')

@section('content')

    <form action="{{ route('contact.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Your Name">
        <input type="email" name="email" placeholder="Your Email">
        <textarea name="message" placeholder="Your Message"></textarea>
        <input type="submit" value="Send Message">
    </form>
@endsection
