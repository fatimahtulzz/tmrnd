<div class="container-fluid">
	
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<p>BUILDING MANAGEMENT SYSTEM</p>
		</div>
		<div class="col-md-1"></div>
	</div>
	
	
	
	
	<div class="row">
		<div class="col-xs-1 col-md-2"></div>
		<div class="col-xs-10 col-md-8" style="padding: 20px 0px;">
			<div class="col-md-2">
				Building Id
			</div>
			<div class="col-md-3">
				Service Number
			</div>
			<div class="col-md-3">
				Building Group
			</div>
			<div class="col-md-2">
				Building Name
			</div>
			<div class="col-md-2">
				Status
			</div>
		</div>
		<div class="col-xs-1 col-md-2"></div>
	</div>
	
	<?php 
	foreach ($building as $s) {
	?> 
	
		<div class="row">
			<div class="col-xs-1 col-md-2"></div>
			<div class="col-xs-10 col-md-8" style="padding: 20px 0px;">
				<div class="col-md-2">
					<a href="<?php echo base_url ();?>system_edit/<?php echo $s->id; ?>" style="cursor: pointer;">
						<?php echo $s->buildingId; ?>
					</a>
				</div>
				<div class="col-md-3">
					<?php echo $s->serviceNum; ?>
				</div>
				<div class="col-md-3">
					<?php echo $s->buildingGroup; ?>
				</div>
				<div class="col-md-2">
					<?php echo $s->buildingName; ?>
				</div>
				<div class="col-md-2">
					<?php echo $s->status; ?>
				</div>
			</div>
			<div class="col-xs-1 col-md-2"></div>
		</div>
	
	<?php } ?>
	
	
	<div class="row">
        <div class="hidden-xs col-sm-2"></div>
        <div class="col-xs-12 col-sm-8" style="margin: 15px 0 15px 0">
			<div data-toggle="modal" style="height: 20px; cursor: pointer; text-align: right;" data-target="#added_system">
            	Add New Bulding
        	</div>
		</div>
        <div class="hidden-xs col-sm-2"></div>
    </div>
	
	
	<!-- MODAL ADD NEW BUILDING -->
	<div class="modal fade" id="added_system" role="dialog">
		<div class="modal-dialog">

		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Add New Building</h4>
			</div>
			<div class="modal-body">
			  
				<div class="container-fluid">
	
					<div class="row">

						<form action="<?php echo base_url ('system_added'); ?>" method="post" accept-charset="utf-8">

							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">
									<div class="col-md-4">
										<span style="vertical-align: top;">Building ID:</span>
									</div>
									<div class="col-md-8">
										<input style="width: 50%" type="text" name="buildingId">
									</div>
								</div>
								<div class="col-md-2"></div>
							</div>

							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">
									<div class="col-md-4">
										<span style="vertical-align: top;">Service Number:</span>
									</div>
									<div class="col-md-8">
										<input style="width: 50%" type="text" name="serviceNum">
									</div>
								</div>
								<div class="col-md-2"></div>
							</div>

							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">
									<div class="col-md-4">
										<span style="vertical-align: top;">Building Group:</span>
									</div>
									<div class="col-md-8">
										<input style="width: 50%" type="text" name="buildingGroup">
									</div>
								</div>
								<div class="col-md-2"></div>
							</div>

							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">
									<div class="col-md-4">
										<span style="vertical-align: top;">Building Name:</span>
									</div>
									<div class="col-md-8">
										<input style="width: 50%" type="text" name="buildingName">
									</div>
								</div>
								<div class="col-md-2"></div>
							</div>

							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">
									<div class="col-md-4">
										<span style="vertical-align: top;">Description:</span>
									</div>
									<div class="col-md-8">
										<input style="width: 50%" type="text" name="description">
									</div>
								</div>
								<div class="col-md-2"></div>
							</div>

							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">
									<div class="col-md-4">
										<span style="vertical-align: top;">Status:</span>
									</div>
									<div class="col-md-8">
										<input style="width: 50%" type="text" name="status">
									</div>
								</div>
								<div class="col-md-2"></div>
							</div>

							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">
									<div class="col-md-4">
										<span style="vertical-align: top;">State:</span>
									</div>
									<div class="col-md-8">
										<select name="state" id="state">
											<?php
											foreach ($states as $s) {
											?>
												<option value="<?php echo $s->idState; ?>"><?php echo $s->state; ?></option>
											<?php 
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-2"></div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<button name="submit" style="border: none; padding-bottom: 10px; max-height: 30px; width: 100px;">Save</button>
								</div>
							</div>

						</form>

					</div>

				</div>

			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>

		</div>
	  </div>

</div>