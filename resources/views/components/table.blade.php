<table class="table">
    <tr>
        <th scope="col">Nama</th>
        <th scope="col">Umur</th>
        <th scope="col">Alamat</th>
        <th scope="col">Pekerjaan</th>
        <th scope="col">Action</th>
    </tr>
    <tbody>

        @foreach ($table as $key => $de)
            <tr>
                <td scope="row">{{ $de['nama'] }}</td>
                <td scope="row">{{ $de['umur'] ?? 0 }}</td>
                <td scope="row">{{ $de['alamat'] ?? '-' }}</td>
                <td scope="row">{{ $de['pekerjaan'] ?? '-' }}</td>
                <td scope="row">
                    <a href="{{ route('profile.edit', $de['id']) }}" class="btn btn-warning">Edit</a>
                </td>

            </tr>
        @endforeach

    </tbody>
</table>
