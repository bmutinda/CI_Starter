<?php echo $this->load->view("admin/header"); ?>

	<div class="form-box" id="login-box">
		<div class="header">Forgot Password</div>
		
		<?php echo form_open("auth/forgot_password", array("class"=>"form-signin-signup"));?>
		<div class="body bg-gray">
			<?php if(!empty($message)){?>
				<div class="alert alert-danger">
					<a href="#" class="close" data-dismiss="alert">&times;</a>
					<div id="infoMessage"><?php echo $message;?></div>
				</div>
			<?php } ?>	
			
			<div class="form-group">
				<?php 
					$email["class"] = "form-control";
					$email["placeholder"]="Email address";
					echo form_input($email);
				?>
			</div>
			<div class="form-group">
				<?php echo form_submit('submit', lang('forgot_password_submit_btn'), "class='btn btn-primary btn-large pull-right'");?>
				<div class="clearfix"></div>
			</div>
		</div>
		<?php echo form_close();?>
	</div>
<?php echo $this->load->view("admin/footer"); ?>