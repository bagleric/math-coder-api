@extends('template')
@section('content')
    @if(count($answers))
        <table class="w3-table-all w3-centered">
            <tr>
                <th>ID</th>
                <th>Question ID</th>
                <th>Value</th>
            </tr>
            @foreach($answers as $answer)
                <tr>
                    <td>{{ $answer->id }}</td>
                    <td>{{ $answer->question_id }}</td>
                    <td>{{ $answer->value }}</td>
                </tr>
            @endforeach
        </table>
    @else
        No Data found
    @endif
@endsection
