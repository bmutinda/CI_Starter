<?php echo $this->load->view("admin/header"); ?>
<div class="form-box" id="login-box">
	<div class="header">Edit User</div>
	
	<?php echo form_open(uri_string());?>
	<div class="body bg-gray">
		<?php if(!empty($message)){?>
			<div class="alert alert-danger">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				<div id="infoMessage"><?php echo $message;?></div>
			</div>
		<?php } ?>
		
		<div class="form-group">
			<?php 
				$first_name["class"] = "form-control";
				$first_name["placeholder"] = "First name";
				echo form_input($first_name);
			?>
		</div>
		<div class="form-group">
			<?php 
				$last_name["class"] = "form-control";
				$last_name["placeholder"] = "Last name";
				echo form_input($last_name);
			?>
		</div>
		<div class="form-group">
			<?php 
				$company["class"] = "form-control";
				$company["placeholder"] = "Company";
				echo form_input($company);
			?>
		</div>
		<div class="form-group">
			<?php 
				$phone["class"] = "form-control";
				$phone["placeholder"] = "Phone";
				echo form_input($phone);
			?>
		</div>
		<div class="form-group">
			<?php 
				$password["class"] = "form-control";
				$password["placeholder"] = "Password (if changing password ) ";
				echo form_input($password);
			?>
		</div>
		<div class="form-group">
			<?php 
				$password_confirm["class"] = "form-control";
				$password_confirm["placeholder"] = "Confirm Password (if changing password)  ";
				echo form_input($password_confirm);
			?>
		</div>
		<?php if ($this->ion_auth->is_admin()): ?>
			<div class="form-group">
				<label for="group"><?php echo lang('edit_user_groups_heading');?></label> <br/>
				<?php foreach ($groups as $group):
					  $gID=$group['id'];
					  $checked = null;
					  $item = null;
					  foreach($currentGroups as $grp) {
						  if ($gID == $grp->id) {
							  $checked= ' checked="checked"';
						  break;
						  }
					  }
				  ?>
				  <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
				  <?php echo $group['name'];?> &nbsp;
			  <?php endforeach?>
			</div>
		<?php endif;?>
		
		<?php echo form_hidden('id', $user->id);?>
		<?php echo form_hidden($csrf); ?>
		
		<div class="form-group">
			<?php echo form_submit('submit', lang('edit_user_submit_btn'), "class='btn btn-primary btn-large pull-right'");?>
			<div class="clearfix"></div>
		</div>
		<?php echo form_close();?>
	</div>
</div>
<?php echo $this->load->view("admin/footer"); ?>