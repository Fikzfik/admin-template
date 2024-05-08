<table class="table table-bordered">
    <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Kelas Mahasiswa</th>
        </tr>
    </thead>
    <tbody>
        @foreach (session('kelasmhs', []) as $index => $mhs)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $mhs['kelas'] }}</td>
            </tr>            
        @endforeach
    </tbody>
</table>
