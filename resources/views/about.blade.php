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
                    <tr>
                        <th>ID</th>
                        <th>Question ID</th>
                        <th>Value</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                    </tr>
                    @foreach($user->answers as $answer)
                        <tr>
                            <td>{{ $answer->id }}</td>
                            <td>{{ $answer->question_id }}</td>
                            <td>{{ $answer->value }}</td>
                            <td>{{ $answer->start_time }}</td>
                            <td>{{ $answer->end_time }}</td>
                        </tr>
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
                        <th>Activity ID</th>
                        <th>Module ID</th>
                        <th>Blockly Event</th>
                        <th>Created At</th>
                    </tr>
                    @foreach($user->events as $event)
                        <tr>
                            <td>{{ $event->id }}</td>
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
                    <tr>
                        <th>ID</th>
                        <th>Activity ID</th>
                        <th>Module ID</th>
                        <th>Started At</th>
                        <th>Ended At</th>
                        <th>No of Compiles</th>
                        <th>Completed</th>
                        <th>Compilation Timestamps</th>
                        <th>Screen Size</th>
                    </tr>
                    @foreach($user->activities as $activity)
                    <tr>
                        <td>{{ $activity->id }}</td>
                        <td>{{ $activity->activity_id }}</td>
                        <td>{{ $activity->module_id }}</td>
                        <td>{{ $activity->started_at }}</td>
                        <td>{{ $activity->ended_at }}</td>
                        <td>{{ $activity->no_of_compiles }}</td>
                        <td>{{ $activity->completed }}</td>
                        <td>{{ $activity->compilation_timestamps }}</td>
                        <td>{{ $activity->screen_size }}</td>
                    </tr>
                    @endforeach
                @else
                    No Data Available
                @endif
            </td>
        </tr>
    </table>
@endsection
