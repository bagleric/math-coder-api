@extends('template')
@section('content')
    <table>
        <tr>
            <th>User ID</th>
            <td>{{$user->id}}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{$user->first_name}}&nbsp{{$user->last_name}}</td>
        </tr>
        <tr>
            <th>Answers</th>
            <td>
                @if(count($user->answers))
                    @foreach($user->answers as $answer)
                        {{$answer->id}}
                    @endforeach
                @else
                    No Data Available
                @endif
            </td>
        </tr>
        <tr>
            <th>Events</th>
            <td>
                @if(count($user->events))
                    <tr>
                        <th>ID</th>
                        <th>User ID</th>
                        <th>Activity ID</th>
                        <th>Module ID</th>
                        <th>Blockly Event</th>
                        <th>Created At</th>
                    </tr>
                    @foreach($user->events as $event)
                        <tr>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->user_id }}</td>
                            <td>{{ $event->activity_id }}</td>
                            <td>{{ $event->module_id }}</td>
                            <td><code>{{ $event->blockly_event }}</code></td>
                            <td>{{ $event->created_at }}</td>
                        </tr>
                    @endforeach
                @else
                    No Data Available
                @endif
            </td>
        </tr>
        <tr>
            <th>Activities</th>
            <td>
                @if(count($user->activities))
                    @foreach($user->activities as $activity)
                        {{$activity->id}}
                    @endforeach
                @else
                    No Data Available
                @endif
            </td>
        </tr>
    </table>
@endsection
