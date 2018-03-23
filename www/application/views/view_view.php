<?php
$this->load->view('templates/header');
$this->load->view('templates/navbar');
$this->load->view('templates/sidebar');
$this->load->view('templates/notification');
?>

<?php 
$attributes = array(
        'class' => 'form-horizontal',
        'id' => ''
);
echo form_open('view/date', $attributes);
?>

	<div class="form-group">
		<label class="col-md-4 control-label">From Date</label>
		<div class="col-md-3">
			<input name="from" type="text" placeholder="YYYY-MM-DD" class="form-control input-md">
        </div>
	</div>
	
	<div class="form-group">
		<label class="col-md-4 control-label">To Date</label>
		<div class="col-md-3">
			<input name="to" type="text" placeholder="YYYY-MM-DD" class="form-control input-md">
        </div>
	</div>
    <div class="col-md-offset-4 col-md-4">
			<input type="submit" class="btn btn-default" name="submit" value="View Logbook">
    </div>

<?php
echo form_close();
$this->load->view('templates/footer');
?>