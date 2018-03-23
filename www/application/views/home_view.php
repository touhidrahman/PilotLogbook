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
echo form_open('home/add', $attributes);
?>
<fieldset>

	<!-- Date -->
	<div class="form-group">
		<label class="col-md-4 control-label">Date</label>
		<div class="col-md-3">
			<input name="dt" type="text" placeholder="YYYY-MM-DD" class="form-control input-md" value="<?php echo set_value('dt'); ?>">
            <?php echo form_error('dt'); ?>
        </div>
	</div>

	<!-- 1st pilot -->
	<div class="form-group">
		<label class="col-md-4 control-label">1st Pilot</label>
		<div class="col-md-6">
			<input name="pilot_1" type="text" placeholder="Rank & Name" class="form-control input-md" value="<?php echo set_value('pilot_1'); ?>">
            <?php echo form_error('pilot_1'); ?>
        </div>
	</div>

	<!-- 2nd pilot -->
	<div class="form-group">
		<label class="col-md-4 control-label">2nd Pilot</label>
		<div class="col-md-6">
			<input name="pilot_2" type="text" placeholder="Rank & Name" class="form-control input-md" value="<?php echo set_value('pilot_2'); ?>">
            <?php echo form_error('pilot_2'); ?>
        </div>
	</div>

	<!-- ac -->
	<div class="form-group">
		<label class="col-md-4 control-label">Aircraft</label>
		<div class="col-md-3">
			<input name="ac_name" type="text" placeholder="" class="form-control input-md" value="<?php echo set_value('ac_name'); ?>">
            <?php echo form_error('ac_name'); ?>
        </div>
	</div>

	<!-- ac number -->
	<div class="form-group">
		<label class="col-md-4 control-label">Aircraft Number</label>
		<div class="col-md-3">
			<input name="ac_num" type="text" placeholder="" class="form-control input-md" value="<?php echo set_value('ac_num'); ?>">
            <?php echo form_error('ac_num'); ?>
        </div>
	</div>

	<!-- Rotor? -->
	<div class="form-group">
		<label class="col-md-4 control-label">Aircraft Type</label>
		<div class="col-md-8">
			<label class="radio-inline"><input name="rotor" type="radio" value="0" checked="checked"> Fixed Wing </label>
			<label class="radio-inline"><input name="rotor" type="radio" value="1"> Rotor </label>
        </div>
	</div>

	<!-- Multi Engine? -->
	<div class="form-group">
		<label class="col-md-4 control-label">Engine</label>
		<div class="col-md-8">
			<label class="radio-inline"><input name="multi_eng" type="radio" value="0" checked="checked"> Single Engine</label>
			<label class="radio-inline"><input name="multi_eng" type="radio" value="1"> Multi Engine</label>
        </div>
	</div>
	
	<!-- Mission -->
	<div class="form-group">
		<label class="col-md-4 control-label">Mission</label>
		<div class="col-md-3">
			<input name="mission" type="text" placeholder="" class="form-control input-md" value="<?php echo set_value('mission'); ?>">
            <?php echo form_error('mission'); ?>
        </div>
	</div>

	<!-- route -->
	<div class="form-group">
		<label class="col-md-4 control-label">Route / Area</label>
		<div class="col-md-6">
			<input name="route" type="text" placeholder="" class="form-control input-md" value="<?php echo set_value('route'); ?>">
            <?php echo form_error('route'); ?>
        </div>
	</div>

	<!-- Night? -->
	<div class="form-group">
		<label class="col-md-4 control-label">Day / Night</label>
		<div class="col-md-8">
			<label class="radio-inline"><input name="night" type="radio" value="0" checked="checked"> Day </label>
			<label class="radio-inline"><input name="night" type="radio" value="1"> Night</label>
	   </div>
	</div>

	<!-- hour pilot 1 -->
	<div class="form-group">
		<label class="col-md-4 control-label">Hour as 1st Pilot</label>
		<div class="col-md-1">
			<input name="hr_1" type="text" placeholder="HH" class="form-control input-md" value="<?php echo set_value('hr_1'); ?>">
            <?php echo form_error('hr_1'); ?>
        </div>
		<div class="col-md-1">
			<input name="min_1" type="text" placeholder="MM" class="form-control input-md" value="<?php echo set_value('min_1'); ?>">
            <?php echo form_error('min_1'); ?>
        </div>
	</div>

	<!-- hour pilot 2 -->
	<div class="form-group">
		<label class="col-md-4 control-label">Hour as 2nd Pilot</label>
		<div class="col-md-1">
			<input name="hr_2" type="text" placeholder="HH" class="form-control input-md" value="<?php echo set_value('hr_2'); ?>">
            <?php echo form_error('hr_2'); ?>
        </div>
		<div class="col-md-1">
			<input name="min_2" type="text" placeholder="MM" class="form-control input-md" value="<?php echo set_value('min_2'); ?>">
            <?php echo form_error('min_2'); ?>
        </div>
	</div>

	<!-- Act Sim -->
	<div class="form-group">
		<label class="col-md-4 control-label">Actual Hour</label>
		<div class="col-md-1">
			<input name="act_hr" type="text" placeholder="HH" class="form-control input-md" value="<?php echo set_value('act_hr'); ?>">
            <?php echo form_error('act_hr'); ?>
        </div>
		<div class="col-md-1">
			<input name="act_min" type="text" placeholder="MM" class="form-control input-md" value="<?php echo set_value('act_min'); ?>">
            <?php echo form_error('act_min'); ?>
        </div>
	</div>
	<div class="form-group">
        <label class="col-md-4 control-label">Simulated Hour</label>
        <div class="col-md-1">
			<input name="sim_hr" type="text" placeholder="HH" class="form-control input-md" value="<?php echo set_value('sim_hr'); ?>">
            <?php echo form_error('sim_hr'); ?>
        </div>
		<div class="col-md-1">
			<input name="sim_min" type="text" placeholder="MM" class="form-control input-md" value="<?php echo set_value('sim_min'); ?>">
            <?php echo form_error('sim_min'); ?>
        </div>
	</div>

        <div class="col-md-offset-4 col-md-4">
			<input type="submit" class="btn btn-primary input-md" value="Save">
        </div>

	
</fieldset>
<?php echo form_close(); ?>

<?php 
$this->load->view('templates/footer');
?>