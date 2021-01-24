@include('header')
<body>
    @if(count($answers))
        <table>
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
</body>
