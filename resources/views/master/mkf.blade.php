<form action="/submitmk" method="POST">
    @csrf
    <div class="form-grup row">
        <label for="nm" class="col-sm-2 col-form-label">MK Mahasiswa</label> 
        <div class="col-sm-10">
            <input type="text" name="mk" id="mk" class="form-control">
        </div>
    </div>
  <button type="submit" class="btn btn-success toastrDefaultSuccess">Success</button>
</form>