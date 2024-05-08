<table class="table table-bordered">
    <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Nama</th>
            <th>NIM</th>
        </tr>
    </thead>
    <tbody>
        @foreach (session('mahasiswa', []) as $index => $mhs)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $mhs['nama'] }}</td>
                <td>{{ $mhs['nim'] }}</td>
            </tr>            
        @endforeach
    </tbody>
</table>
