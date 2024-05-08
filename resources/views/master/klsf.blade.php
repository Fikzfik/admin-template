<form action="/submitkls" method="POST">
    @csrf
    <div class="form-grup row">
        <label for="nm" class="col-sm-2 col-form-label">Kelas Mahasiswa</label> 
        <div class="col-sm-10">
            <input type="text" name="kelas"  class="form-control">
        </div>
    </div>
  <button type="submit" class="btn btn-success toastrDefaultSuccess">Success</button>
</form>