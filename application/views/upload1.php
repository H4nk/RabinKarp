<!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>UPLOAD FILE SOURCE</h1>
        <p>Pilih file yang akan dilakukan proses plagiatnya dan Masukan Nilai K-Gram</p>
        <p>
		<form action="<?= base_url();?>Web/uploadx" method="post">
	 <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">File Source</label>
    <div class="col-sm-10">
	<textarea class="form-control" name="source" rows="10"></textarea>
    </div>
  </div>	
  </br>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">File Perbanding 1</label>
    <div class="col-sm-10">
	<textarea class="form-control" name="pertama" rows="10"></textarea>
    </div>
  </div>  
  </br>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">File Perbanding 2</label>
    <div class="col-sm-10">
	<textarea class="form-control" name="kedua" rows="10"></textarea>
    </div>
  </div>
</br>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">K-GRAM</label>
    <div class="col-sm-1">
      <input type="txt" name="gram"  class="form-control">
    </div>
  </div><br>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Basis</label>
    <div class="col-sm-1">
      <input type="txt" name="basis"  class="form-control">
    </div>
  </div><br>

<button class="btn btn-primary" type="submit">Proses Algoritma Rabin Karp</button>
		</form>
        </p>
      </div>

    </div> <!-- /container -->
