@include('header')
<body>
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
                </tr>
            @endforeach
        </table>
    @else
        No Data found
    @endif
</body>

