<?php
$this->load->view('templates/header');
$this->load->view('templates/navbar');
$this->load->view('templates/sidebar');
$this->load->view('templates/notification');
?>
<?php
// Change the css classes to suit your needs

$attributes = array(
        'class' => 'form-horizontal',
        'id' => ''
);
echo form_open('account/changePassword', $attributes);
?>
<fieldset>

	<!-- Form Name -->
	<legend>Change Your Current Password</legend>

	
	<!-- Pass input-->
	<div class="form-group">
		<label class="col-md-4 control-label" for="password">Current Password</label>
		<div class="col-md-5">

			<input id="name" name="password" type="password" placeholder="" class="form-control input-md"
				value="<?php echo set_value('password'); ?>"> <br><?php echo form_error('password'); ?>
		</div>
	</div>

	<!-- Pass input-->
	<div class="form-group">
		<label class="col-md-4 control-label" for="new_password1">New Password</label>
		<div class="col-md-5">

			<input name="new_password1" type="password" placeholder="" class="form-control input-md"
				value="<?php echo set_value('new_password1'); ?>"><?php echo form_error('new_password1'); ?>
		</div>
		</div>

	<!-- Pass input-->
	<div class="form-group">
		<label class="col-md-4 control-label" for="new_password2">Confirm New Password</label>
		<div class="col-md-5">

			<input name="new_password2" type="password" placeholder="" class="form-control input-md"
				value="<?php echo set_value('new_password2'); ?>"><?php echo form_error('new_password2'); ?>
		</div>
	</div>

	<!-- Button -->
	<div class="form-group">
		<label class="col-md-4 control-label" for="submit"></label>
		<div class="col-md-4">
        <?php echo form_submit( 'submit', 'Change Password', 'class="btn btn-warning"'); ?>
				</div>
	</div>

</fieldset>
<?php echo form_close(); ?>

<?php
$this->load->view('templates/footer');
?>
