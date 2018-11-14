

<?php
include "conn.php";
$idlowker=$_POST['idlowker'];
	$sql = "select * from lowker where idlowker = '$idlowker'";
	$query = $conn->query($sql);
	foreach ($query as $row) {
		$isi =$row['isi'];
	}
?>

	<!-- Modal Header -->
	<div class="modal-header">
		<h4 class="modal-title col-sm-12">
		 Isi Lamaran Kerja
		</h4>
	</div>

	<!-- Modal body -->
	<div class="modal-body">
			<div class="card card-outline card-info">
            
            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <textarea class="textarea" id="isi" name="isi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $isi ?></textarea>
              </div>
            <div class="row">
            	
	              <div class="col-sm-6" align="">
	              </div>
	              <div class="col-sm-6" align="right">
	                            <button class="btn btn-primary" onclick="save('<?= $idlowker ?>')" type="button">Save</button>
	          	  </div>
            </div>
            </div>
          </div>
  
	</div>

	<!-- Modal footer -->
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	</div>

<script type="text/javascript">
	$(function () {
   
    $('.textarea').wysihtml5({
      toolbar: { fa: true }
    })
  })
</script>