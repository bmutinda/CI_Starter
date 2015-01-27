<?php echo $this->load->view("admin/header"); ?>

	<div class="form-box" id="login-box">
		<div class="header"><?php echo lang('deactivate_heading');?></div>
		
		<?php echo form_open("auth/deactivate/".$user->id);?>
		<div class="body bg-gray">
			<p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>
			
			<?php if(!empty($message)){?>
				<div class="alert alert-danger">
					<a href="#" class="close" data-dismiss="alert">&times;</a>
					<div id="infoMessage"><?php echo $message;?></div>
				</div>
			<?php } ?>	
			
			<div class="form-group">
				<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
				<input type="radio" name="confirm" value="yes" checked="checked" />
				<?php echo lang('deactivate_confirm_n_label', 'confirm');?>
				<input type="radio" name="confirm" value="no" />
			</div>
			
			<?php echo form_hidden($csrf); ?>
			<?php echo form_hidden(array('id'=>$user->id)); ?>
			
			<div class="form-group">
				<?php echo form_submit('submit', lang('deactivate_submit_btn'), "class='btn btn-primary btn-large pull-right'");?>
				<div class="clearfix"></div>
			</div>
		</div>
		<?php echo form_close();?>
	</div>
<?php echo $this->load->view("admin/footer"); ?>