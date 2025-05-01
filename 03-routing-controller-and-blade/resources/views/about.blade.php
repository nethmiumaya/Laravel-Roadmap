<!-- resources/views/about.blade.php -->
@extends('layout')

@section('content')
    <h2>About Us</h2>
    <p>Hey! Below shows our team members</p>

    <h3>Our Team</h3>
    <ul>
        @foreach($team as $member)
            <li>{{ $member }}</li>
        @endforeach
    </ul>
@endsection
