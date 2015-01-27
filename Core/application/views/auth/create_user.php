<?php echo $this->load->view("admin/header"); ?>

<div class="form-box" id="login-box">
	<div class="header">Register New Membership</div>
	<?php echo form_open("auth/create_user");?>
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
					$email["class"] = "form-control";
					$email["placeholder"] = "Email address";
					echo form_input($email);
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
					$password["placeholder"] = "Password";
					echo form_input($password);
				?>
			</div>
			<div class="form-group">
				<?php 
					$password_confirm["class"] = "form-control";
					$password_confirm["placeholder"] = "Confirm Password ";
					echo form_input($password_confirm);
				?>
			</div>
		</div>
		<div class="footer">                    

			<button type="submit" class="btn bg-olive btn-block">Sign me up</button>

			<a href="<?php echo base_url() ?>auth/login" class="text-center">I already have a membership</a>
		</div>
	<?php echo form_close();?>
</div>
<?php echo $this->load->view("admin/footer"); ?>