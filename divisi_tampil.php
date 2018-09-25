<?php
include 'conn.php';
	$divisi = $_POST['divisi'];
	if($_POST['btn']=="add"){

		$sql1 = "INSERT INTO `divisi` (`namadivisi`) VALUES ('$divisi')";
		$query1 = $conn->query($sql1);
		
	}else if($_POST['btn']=="edit"){
	$edt = $_POST['edit'];

		$sql1 = "UPDATE `divisi` SET `namadivisi` = '$divisi' WHERE `divisi`.`namadivisi` = '$edt'";
		$query1 = $conn->query($sql1);
	
	}else if($_POST['btn']=="del"){
		
		$sql1 = "DELETE FROM `divisi` WHERE `divisi`.`namadivisi` = '$divisi'";
		$query1 = $conn->query($sql1);
		
	}


?>





						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Divisi</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php


								$sql = "SELECT * FROM `divisi`";
									$no=0;
								$query = $conn->query($sql);
								foreach ($query as $row) {
									$no++;
									?>
									<tr>
										<td><?= $no ?></td>
										<td><?=$row['namadivisi'];?></td>
										<td><button class="btn btn-warning fa fa-edit" title="Edit" onclick="edit('<?=$row[namadivisi]?>')"></button>
											<button onclick="del('<?=$row[namadivisi]?>')"  class="btn btn-danger fa fa-close" title="delete"></button>
										</td>
									</tr>
									<?php
									$field="";
								}

								?>
							</tbody>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Nama Divisi</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
					


<script>
	

	function edit(divisi){
		
		document.getElementById("divisi").value=divisi;
		document.getElementById("edit").value=divisi;
		document.getElementById("btn").value="edit";
	}

	function del(divisi){
		$.ajax({
			type: "POST",
			url: "divisi_tampil.php", 
			data: {btn:'del', divisi:divisi},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				
    			$('#isifile').html(data);
        		//alert(data);  //as a debugging message.
        	}
        });
	}

</script>
