@extends('header')
@section('content')
    <div class="w3-container">
        <h2>Math Coder API</h2>
        <ul class="w3-ul w3-hoverable w3-center">
            <li><a href="{{ route('user.show') }}">Users</a></li>
            <li><a href="{{ route('answer.show') }}">Answers</a></li>
            <li><a href="{{ route('event.show') }}">Events</a></li>
            <li><a href="{{ route('activity.show') }}">Activities</a></li>
        </ul>
    </div>
    <style>
        a{
            text-decoration: none;
        }
    </style>
@endsection
