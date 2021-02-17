@extends('template')
@section('content')
    <table>
        <tr>
            <th>User ID</th>
            <td>{{$user->id}}</td>
            <th>Name</th>
            <td>{{$user->first_name}}&nbsp{{$user->last_name}}</td>
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
            <th>Events</th>
            <td>
                @if(count($user->events))
                    @foreach($user->events as $event)
                        {{$event->id}}
                    @endforeach
                @else
                    No Data Available
                @endif
            </td>
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
