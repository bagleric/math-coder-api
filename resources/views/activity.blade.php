@include('header')
<body>
    @if(count($activities))
        <table class="w3-table-all w3-centered">
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Activity ID</th>
                <th>Module ID</th>
                <th>Started At</th>
                <th>Ended At</th>
                <th>No of Compiles</th>
                <th>Completed</th>
                <th>Compilation Timestamps</th>
                <th>Screen Size</th>
            </tr>
            @foreach($activities as $activity)
                <tr>
                    <td>{{ $activity->id }}</td>
                    <td>{{ $activity->user_id }}</td>
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
        </table>
    @else
        No Data found
    @endif
</body>
