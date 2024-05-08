<table class="table table-bordered">
    <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Nama</th>
            <th>NIM</th>
        </tr>
    </thead>
    <tbody>
        @foreach (session('dosenmhs', []) as $index => $mhs)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $mhs['nmdsn'] }}</td>
                <td>{{ $mhs['nip'] }}</td>
            </tr>            
        @endforeach
    </tbody>
</table>
