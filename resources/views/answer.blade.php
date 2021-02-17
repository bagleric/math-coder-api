@extends('template')
@section('content')
    @if(count($answers))
        <table class="w3-table-all w3-centered">
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Question ID</th>
                <th>Value</th>
                <th>Start Time</th>
                <th>End Time</th>
            </tr>
            @foreach($answers as $answer)
                <tr>
                    <td>{{ $answer->id }}</td>
                    <td>{{ $answer->user_id }}</td>
                    <td>{{ $answer->question_id }}</td>
                    <td>{{ $answer->value }}</td>
                    <td>{{ $answer->start_time }}</td>
                    <td>{{ $answer->end_time }}</td>
                </tr>
            @endforeach
        </table>
    @else
        No Data found
    @endif
@endsection
