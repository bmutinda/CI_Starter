<?php echo $this->load->view("admin/header"); ?>

	<div class="form-box" id="login-box">
		<div class="header">Sign In</div>
		
		<?php echo form_open("auth/login");?>
			<div class="body bg-gray">
				<?php if(!empty($message)){?>
					<div class="alert alert-danger">
						<a href="#" class="close" data-dismiss="alert">&times;</a>
						<div id="infoMessage"><?php echo $message;?></div>
					</div>
				<?php } ?>			
			
				<div class="form-group">
					<?php 
						$identity["class"] = "form-control";
						$identity["placeholder"]="Email";
						echo form_input($identity);
					?>
				</div>
				<div class="form-group">
					<?php 
						$password["class"] = "form-control";
						$password["placeholder"]="Password";
						echo form_input($password);								
					?>
				</div>          
				<div class="form-group">
					<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> Remember me
				</div>
			</div>			
			
			<div class="footer">                                                             
				<?php echo form_submit('submit', lang('login_submit_btn'), "class='btn bg-olive btn-block'");?>
				
				<p><a href="forgot_password">I forgot my password</a></p>
				
			</div>
		</form>

	</div>
<?php echo $this->load->view("admin/footer"); ?>
