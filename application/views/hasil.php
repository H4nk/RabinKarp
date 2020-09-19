<div class="bs-example" data-example-id="simple-responsive-table">
    <div class="table-responsive">
	 <h2 id="tables-hover-rows">File Asli</h2>
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>File Source</th>
            <th>File Perbanding 1</th>
            <th>File Perbanding 2</th>
  
          </tr>
        </thead>
        <tbody>
          <tr><?php foreach ($file->result() as $dt) { ?>
            <th scope="row">1</th>
     <td><textarea disabled id="exampleInputFile" class="form-control" rows="10"><?= $a=$dt->source;?></textarea></td>
<td><textarea disabled id="exampleInputFile" class="form-control" rows="10"><?= $b=$dt->pertama;?></textarea></td>
            <td><textarea disabled id="exampleInputFile" class="form-control" rows="10"><?= $c=$dt->kedua;?></textarea></td>

          <?php } ?>
          </tr>
          
        </tbody>
      </table>
	  	 <h2 id="tables-hover-rows">Preprocessing</h2>

	  <table class="table">
        <thead>
		
          <tr>
            <th>#</th>
            <th>File Source</th>
            <th>File Perbanding 1</th>
            <th>File Perbanding 2</th>
  
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><textarea disabled class="form-control" rows="10"><?= $d=hapus_simbol($a);?></textarea></td>
            <td><textarea disabled class="form-control" rows="10"><?= $e=hapus_simbol($b);?></textarea></td>
            <td><textarea disabled class="form-control" rows="10"><?= $f=hapus_simbol($c);?></textarea></td>
          </tr>        
        </tbody>
      </table>
    </div><!-- /.table-responsive -->

    <div class="table-responsive">
	 <h2 id="tables-hover-rows">Tokenizing K-Gram</h2>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Dokumen Asli</th>
            <th>Perbanding 1</th>
            <th>Perbanding 2</th>
            
          </tr>
        </thead>
        <tbody>
          <tr><?php $x=$this->uri->segment(4);$h4nk=$this->uri->segment(5);?>
            <th scope="row">1</th>
            <td><?= kgram($d,$x);?></td>
            <td><?= kgram($e,$x);?></td>
            <td><?= kgram($f,$x);?></td>
        
          </tr>
        
        </tbody>
      </table>
    </div>
	<div class="table-responsive">
		 <h2 id="tables-hover-rows">Hashing</h2>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Dokumen Asli</th>
            <th>Perbanding 1</th>
            <th>Perbanding 2</th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
<td><?= hasing($d, $x, $h4nk);?></td>
<td><?= hasing($e, $x, $h4nk);?></td>
<td><?= hasing($f, $x, $h4nk);?></td>
        
          </tr>
        
        </tbody>
      </table>
    </div>
	
		<div class="table-responsive">
		 <h2 id="tables-hover-rows">Finger</h2>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Dokumen Asli</th>
            <th>Perbanding 1</th>
            <th>Perbanding 2</th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
<td><?php $query= $this->db->query("select source from source group by source ORDER BY id ASC"); 
foreach ( $query->result_array() as $dt) {
echo $ff=hasing($dt['source'],$x, $h4nk);
}
?></td>
<td><?php $query= $this->db->query("select source from pertama group by source ORDER BY id ASC"); 
foreach ( $query->result_array() as $dt) {
echo hasing($dt['source'],$x, $h4nk);
}
?></td>
            <td><?php $query= $this->db->query("select source from kedua group by source ORDER BY id ASC" ); 
foreach ( $query->result_array() as $dt) {
echo hasing($dt['source'],$x, $h4nk);
}
?></td>
        
          </tr>
        
        </tbody>
      </table>
    </div>
	<div class="table-responsive">
		  	 <h2 id="tables-hover-rows">Dice’s Similarity</h2>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Similarity  Dokumen A & Pembading 1 (B)</th>
            <th>Similarity  Dokumen A & Pembading 2 (C)</th>
    
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><?php $a=$this->Config_model->count_a();
			 $b=$this->Config_model->count_b();
			 $x=$this->Config_model->count_ab();
			 $xf= round((2*$x/($a+$b))*100,2);
			?>
			Skema hash Text (A) = <?= $a;?></br>  Skema hash Text (B) = <?= $b;?> <br> Skema Hash sama Text A dan Text B (X) = <?= $x;?> <br>
			Similarity (2*X/(A+B))*100 = <?= $xf;?> %
</td>
            <td><?php $ax=$this->Config_model->count_a();
			$c=$this->Config_model->count_c();
			$xx=$this->Config_model->count_ac();
			$xxx= round((2*$xx/($ax+$c))*100,2);
			?>
			Skema hash Text (A) = <?= $ax;?></br>  Skema hash Text (C)= <?= $c;?> <br> Skema Hash sama Text A dan Text C (X) = <?= $xx;?> <br>  
			Similarity (2*X/(A+C))*100 = <?= $xxx;?> %

			
			</td>
 
        
          </tr>
        
        </tbody>
      </table>
    </div>

  </div>