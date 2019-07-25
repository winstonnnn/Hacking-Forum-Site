			<!-- Logout -->
    <div  class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div style="width: 400px;" class="modal-content">
                <div class="modal-header" style="background-color: #252323;>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel" style="color: orange;">Logging out...</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<h5><center>Are you sure you want to logout <?php echo $username; ?>?</strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer" style="background-color: #252323; ">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <a href="logout1.php" class="btn btn-danger" style="background-color: orange; color: black;"><i class="fa fa-sign-out"></i> Logout</a>
                </div>
				
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>