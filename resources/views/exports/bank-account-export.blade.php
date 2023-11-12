<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nomor Rekening</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item['account_number'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
