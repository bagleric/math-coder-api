@extends('template')
@section('content')
    @if(count($users))
        <table class="w3-table-all w3-centered">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>
                        <form method="post" action="{{route('user.about')}}">
                            @csrf
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        No Data found
    @endif
@endsection

