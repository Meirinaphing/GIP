



	<!-- Modal Header -->
	<div class="modal-header">
		<h4 class="modal-title col-sm-12">
			Ganti Password
		</h4>
	</div>

	<!-- Modal body -->
	<div class="modal-body">
			<table id="example2" >
							<tr hidden="">
								<td>
									Username : &nbsp
								</td>
								<td>
									 <input class="form-control form-control-sm" type="text" name="iduserpass" id="iduserpass" placeholder="Username">
								
								</td>
								<td>
								</td>
							</tr>
							
							<tr>
								<td>
									Old Password : &nbsp
								</td>
								<td>
									 <input class="form-control form-control-sm" type="password" name="oldpassworde" id="oldpassworde" placeholder="Password">
								</td>
								<td>
								</td>
							</tr>
							
							<tr>
								<td>
									Password : &nbsp
								</td>
								<td>
									 <input class="form-control form-control-sm" type="password" name="passworde" id="passworde" placeholder="Password">
								</td>
								<td>
								</td>
							</tr>
							<tr>
								<td>
									Repassword : &nbsp
								</td>
								<td>
									 <input class="form-control form-control-sm" type="password" name="repassworde" id="repassworde" placeholder="Repassword" onchange="cekpasse(this.value)">
									
								</td>
								<td>&nbsp &nbsp
									<button data-dismiss="modal" type="button" value="editpass" class="btn btn-primary" onclick="edtpass()">Change</button>
								</td>
							</tr>
						</table>
  
	</div>

	<!-- Modal footer -->
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
