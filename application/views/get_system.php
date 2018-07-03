<div class="container-fluid content">
	
	<div class="row">
		<div class="hidden-xs col-sm-2 no-padding"></div>
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h1 style="color: black; text-align: center; margin-top: 120px;">
				Building Details
			</h1>
		</div>
		<div class="hidden-xs col-sm-2 no-padding"></div>
	</div>
	
	<div class="row">
		<div class="hidden-xs col-sm-2"></div>
		<div class="col-xs-12 col-sm-8" style="margin: 15px 0 15px 0">
			<a href="<?php echo base_url(''); ?>">
				List of Building
			</a>
		</div>
		<div class="hidden-xs col-sm-2"></div>
	</div>


<?php 
	
    foreach ($systemData as $sd) {


		
			
			if (isset ($msg)) {
				echo '<div class="row">
						<div class="hidden-xs col-sm-2 no-padding"></div>
						<div class="col-xs-12 col-sm-8 bg-white" style="padding: 10px 0 10px 0;">
							<div class="col-sm-9">
								<span style="font-weight: bold; color: red;">'.$msg.' </span>
							</div>
							<div class="col-sm-3"></div>
						</div>
						<div class="hidden-xs col-sm-2 no-padding"></div>
					  </div>';
			}



			echo '<form action="'.base_url ('system_edit/'.$sd->id).'" method="POST" accept-charset="utf-8">';
		?>
			
			<div class="row">
				<div class="hidden-xs col-sm-2 no-padding"></div>
				<div class="col-xs-12 col-sm-8 bg-white" style="padding: 10px 0 10px 0;"></div>
				<div class="hidden-xs col-sm-2 no-padding"></div>
			</div>
			
			<div class="row">
				<div class="hidden-xs col-sm-2 no-padding"></div>
				<div class="col-xs-12 col-sm-8 bg-white" style="padding: 10px 0 10px 0;">
					<div class="col-sm-3">
						<span>Building Id:</span>
					</div>
					<div class="col-sm-9">
						<input type="text" name="buildingId" id="buildingId" value="<?php echo $sd->buildingId; ?>" style="width: 100%">
					</div>
				</div>
				<div class="hidden-xs col-sm-2 no-padding"></div>
			</div>
	
			<div class="row">
				<div class="hidden-xs col-sm-2 no-padding"></div>
				<div class="col-xs-12 col-sm-8 bg-white" style="padding: 10px 0 10px 0;">
					<div class="col-sm-3">
						<span>Service Number:</span>
					</div>
					<div class="col-sm-9">
						<input type="text" name="serviceNum" id="serviceNum" value="<?php echo $sd->serviceNum; ?>" style="width: 100%">
					</div>
				</div>
				<div class="hidden-xs col-sm-2 no-padding"></div>
			</div>
	
			<div class="row">
				<div class="hidden-xs col-sm-2 no-padding"></div>
				<div class="col-xs-12 col-sm-8 bg-white" style="padding: 10px 0 10px 0;">
					<div class="col-sm-3">
						<span>Building Group:</span>
					</div>
					<div class="col-sm-9">
						<input type="text" name="buildingGroup" id="buildingGroup" value="<?php echo $sd->buildingGroup; ?>" style="width: 100%">
					</div>
				</div>
				<div class="hidden-xs col-sm-2 no-padding"></div>
			</div>
	
			<div class="row">
				<div class="hidden-xs col-sm-2 no-padding"></div>
				<div class="col-xs-12 col-sm-8 bg-white" style="padding: 10px 0 10px 0;">
					<div class="col-sm-3">
						<span>Building Name:</span>
					</div>
					<div class="col-sm-9">
						<input type="text" name="buildingName" id="buildingName" value="<?php echo $sd->buildingName; ?>" style="width: 100%">
					</div>
				</div>
				<div class="hidden-xs col-sm-2 no-padding"></div>
			</div>
	
			<div class="row">
				<div class="hidden-xs col-sm-2 no-padding"></div>
				<div class="col-xs-12 col-sm-8 bg-white" style="padding: 10px 0 10px 0;">
					<div class="col-sm-3">
						<span>Description:</span>
					</div>
					<div class="col-sm-9">
						<input type="text" name="description" id="description" value="<?php echo $sd->description; ?>" style="width: 100%">
					</div>
				</div>
				<div class="hidden-xs col-sm-2 no-padding"></div>
			</div>
	
			<div class="row">
				<div class="hidden-xs col-sm-2 no-padding"></div>
				<div class="col-xs-12 col-sm-8 bg-white" style="padding: 10px 0 10px 0;">
					<div class="col-sm-3">
						<span>Status:</span>
					</div>
					<div class="col-sm-9">
						<input type="text" name="status" id="status" value="<?php echo $sd->status; ?>" style="width: 100%">
					</div>
				</div>
				<div class="hidden-xs col-sm-2 no-padding"></div>
			</div>
	
			<div class="row">
				<div class="hidden-xs col-sm-2 no-padding"></div>
				<div class="col-xs-12 col-sm-8 bg-white" style="padding: 10px 0 10px 0;">
					<div class="col-sm-3">
						<span>State:</span>
					</div>
					<div class="col-sm-9">
						<select name="state" id="state">
							<?php
							foreach ($states as $s) {
								
								if ($s->state == $sd->state)
									$sel = 'selected';
								else
								   $sel = '';
							?>
								<option value="<?php echo $s->state; ?>" <?php echo $sel;?>><?php echo $s->state; ?></option>
							<?php 
							}
							?>
						</select>
					</div>
				</div>
				<div class="hidden-xs col-sm-2 no-padding"></div>
			</div>

			<div class="row">
				<div class="hidden-xs col-sm-2 no-padding"></div>
				<div class="col-xs-12 col-sm-8 bg-white" style="padding: 10px 0 10px 0;"></div>
				<div class="hidden-xs col-sm-2 no-padding"></div>
			</div>
	
			<br/><br/>

			<div class="row">
				<div class="col-xs-6 text-center">
					<button name="btnUpdate" id="btnUpdate" style="border: none; padding-bottom: 10px; max-height: 30px; width: 100px;">Save</button>
				</div>
				
				<div class="col-xs-6 text-center">
					<a onclick="deletedata('<?php echo $sd->id; ?>')" style="cursor: pointer;">
						Delete
					</a>
				</div>
			</div>

            <input type="hidden" name="txtId" value="'<?php echo $sd->id; ?>">

        </form>

<?php        

    }
    
?>

</div>

<script>

	function deletedata(uid)
	{
		if (confirm('Are You Sure to Delete this Record?'))
		{
			window.location.href = 'delete_system?id=' + uid;
		}
	}

</script>