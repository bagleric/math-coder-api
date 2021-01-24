@if(count($answers))
    <table>
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
