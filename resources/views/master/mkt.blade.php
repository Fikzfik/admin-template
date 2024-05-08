<table class="table table-bordered">
    <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>MK Mahasiswa</th>
        </tr>
    </thead>
    <tbody>
        @foreach (session('mkmhs', []) as $index => $mhs)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $mhs['mk'] }}</td>
            </tr>            
        @endforeach
    </tbody>
</table>
