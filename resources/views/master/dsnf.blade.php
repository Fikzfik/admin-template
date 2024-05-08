<form action="/submitdsn" method="POST">
    @csrf
    <div class="form-grup row">
        <label for="nm" class="col-sm-2 col-form-label">Nama Dosen</label> 
        <div class="col-sm-10">
            <input type="text" name="nmdsn" id="nm" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="nim" class="col-sm-2 col-form-label">NIP</label>
        <div class="col-sm-10"> 
            <input type="text" name="nip" class="form-control" id="">
        </div>
    </div>
  <button type="submit" class="btn btn-success toastrDefaultSuccess">Success</button>
</form>