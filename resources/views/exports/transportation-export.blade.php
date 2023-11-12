<table>
    <thead>
        <tr>
            <th>
                No
            </th>
            <th>
                Nama Transportasi
            </th>
            <th>
                Jenis Transportasi
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['type_transportation'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
