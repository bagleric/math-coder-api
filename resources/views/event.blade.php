@extends('template')
@section('content')
    @if(count($events))
        <table>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Activity ID</th>
                <th>Module ID</th>
                <th>Blockly Event</th>
                <th>Created At</th>
            </tr>
            @foreach($events as $event)
                <tr>
                    <td>{{ $event->id }}</td>
                    <td>{{ $event->user_id }}</td>
                    <td>{{ $event->activity_id }}</td>
                    <td>{{ $event->module_id }}</td>
                    <td><code>{{ $event->blockly_event }}</code></td>
                    <td>{{ $event->created_at }}</td>
                </tr>
            @endforeach
        </table>
    @else
        No Data found
    @endif
@endsection
