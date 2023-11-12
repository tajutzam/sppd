<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$item['name']}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
