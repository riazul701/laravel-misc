<table border="1">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Publisher</th>
        <th>ReleaseDate</th>
        <th>CreatedAt</th>
        <th>UpdatedAt</th>
    </tr>
    @foreach($games as $game)
        <tr>
            <td>{{ $game->id }}</td>
            <td>{{ $game->title }}</td>
            <td>{{ $game->publisher }}</td>
            <td>{{ $game->releasedate }}</td>
            <td>{{ $game->created_at }}</td>
            <td>{{ $game->updated_at }}</td>
        </tr>
    @endforeach
</table>
