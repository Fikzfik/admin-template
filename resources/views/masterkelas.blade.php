@extends('main')
@section('page-content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Master Mahasiswa</h3>
    </div>

    <div class="card-body">
        @include('master.klsf')
    </div>
    <div class="card-body">
        @include('master.klst')    
    </div>
</div>
@endsection
@section('page-js')
<script src="{{ asset('/plugins/toastr/toastr.min.js') }}"></script>

<script>
    $(window).on("load",function(){
        @if (session()->has('notif'))
            toastr.succes('{{ session('notif') }}')
        @endif
    })
</script>
@endsection