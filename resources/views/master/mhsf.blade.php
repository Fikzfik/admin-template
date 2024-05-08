<form action="/submitmhs" method="POST">
    @csrf
    <div class="form-grup row">
        <label for="nm" class="col-sm-2 col-form-label">Nama Mahasiswa</label> 
        <div class="col-sm-10">
            <input type="text" name="nama" id="nm" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
        <div class="col-sm-10"> 
            <input type="text" name="nim" class="form-control" id="">
        </div>
    </div>
  <button type="submit" class="btn btn-success toastrDefaultSuccess">Success</button>
</form>