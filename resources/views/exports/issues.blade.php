<table>
    <thead>
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Body</th>
    </tr>
    </thead>
    <tbody>
    @foreach($issues as $issue)
        <tr>
            <td>{{ $issue['number'] }}</td>
            <td>{{ $issue['title'] }}</td>
            <td>{{ $issue['body'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
