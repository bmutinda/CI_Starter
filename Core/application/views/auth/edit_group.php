<?php echo $this->load->view("admin/header"); ?>

	<div class="form-box" id="login-box">
		<div class="header">Edit group</div>
		
		<?php echo form_open(current_url());?>
		<div class="body bg-gray">
			<?php if(!empty($message)){?>
				<div class="alert alert-danger">
					<a href="#" class="close" data-dismiss="alert">&times;</a>
					<div id="infoMessage"><?php echo $message;?></div>
				</div>
			<?php } ?>	
			
			<div class="form-group">
				<?php 
					$group_name["class"] = "form-control";
					$group_name["placeholder"]="Group name";
					echo form_input($group_name);
				?>
			</div>
			<div class="form-group">
				<?php 
					$group_description["class"] = "form-control";
					$group_description["placeholder"]="Group description";
					echo form_input($group_description);
				?>
			</div>
			
			<div class="form-group">
				<?php echo form_submit('submit', lang('edit_group_submit_btn'), "class='btn btn-primary btn-large pull-right'");?>
				<div class="clearfix"></div>
			</div>
		</div>
		<?php echo form_close();?>
	</div>
<?php echo $this->load->view("admin/footer"); ?>