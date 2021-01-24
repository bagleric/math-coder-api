@if(count($users))
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $activity->first_name }}</td>
                <td>{{ $activity->last_name }}</td>
            </tr>
        @endforeach
    </table>
@else
    No Data found
@endif

