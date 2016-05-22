	<!-- Isi Modal -->
	<!-- Login -->
	<div class="modal fade loginDIV-sm" tab-index="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="True">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<form method="post" class="form-signin" role="form" action="login__.php">
					<div class="modal-header">
						<button class="close" data-dismiss="modal" aria-hidden="True">&times</button>
						<h4 id="myModalLabel" class="modal-title">Login Required</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<input name="usern" type="text" class="form-control" placeholder="Nama pengguna" required autofocus>
						</div>
						<input name="passw" type="password" class="form-control" placeholder="Kata sandi" required>						
					</div>
					<div class="modal-footer">
						<input type="submit" class="btn btn-primary" value="Login">
					</div>
				</form> 
				<!-- Form Signin -->
			</div> 
			<!-- Modal content -->
		</div> 
		<!-- Modal-dialog -->
	</div> 
	<!-- modal fade -->