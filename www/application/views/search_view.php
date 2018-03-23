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
echo form_open('search/find', $attributes);
?>
<fieldset>
<legend>Search Among All Records Where...</legend>
	<!-- Date -->
	<div class="form-group">
		<label class="col-md-4 control-label">Date</label>
		<div class="col-md-3">
			<input name="dt" type="text" placeholder="YYYY-MM-DD" class="form-control input-md">
        </div>
	</div>

	<!-- 1st pilot -->
	<div class="form-group">
		<label class="col-md-4 control-label">1st Pilot</label>
		<div class="col-md-6">
			<select name="pilot_1" class="form-control">
			  <option value="">---Select---</option>
		      <?php foreach ($pilot_1s as $p):?>
		      <option value="<?php echo $p->pilot_1;?>"><?php echo $p->pilot_1;?></option>
		      <?php endforeach;?>
		  </select>
        </div>
	</div>

	<!-- 2nd pilot -->
	<div class="form-group">
		<label class="col-md-4 control-label">2nd Pilot</label>
		<div class="col-md-6">
			<select name="pilot_2" class="form-control">
			  <option value="">---Select---</option>
		      <?php foreach ($pilot_2s as $p):?>
		      <option value="<?php echo $p->pilot_2;?>"><?php echo $p->pilot_2;?></option>
		      <?php endforeach;?>
		  </select>
        </div>
	</div>

	<!-- ac -->
	<div class="form-group">
		<label class="col-md-4 control-label">Aircraft</label>
		<div class="col-md-3">
		  <select name="ac_name" class="form-control">
		      <option value="">Select</option>
		      <?php foreach ($ac_names as $ac_name):?>
		      <option value="<?php echo $ac_name->ac_name;?>"><?php echo $ac_name->ac_name;?></option>
		      <?php endforeach;?>
		  </select>
        </div>
	</div>

	<!-- Rotor? -->
	<div class="form-group">
		<label class="col-md-4 control-label">Aircraft Type</label>
		<div class="col-md-8">
			<label class="radio-inline"><input name="rotor" type="radio" value="0"> Fixed Wing </label>
			<label class="radio-inline"><input name="rotor" type="radio" value="1"> Rotor </label>
        </div>
	</div>

	<!-- Multi Engine? -->
	<div class="form-group">
		<label class="col-md-4 control-label">Engine</label>
		<div class="col-md-8">
			<label class="radio-inline"><input name="multi_eng" type="radio" value="0"> Single Engine</label>
			<label class="radio-inline"><input name="multi_eng" type="radio" value="1"> Multi Engine</label>
        </div>
	</div>
	
	<!-- Mission -->
	<div class="form-group">
		<label class="col-md-4 control-label">Mission</label>
		<div class="col-md-3">
			<select name="mission" class="form-control">
		      <option value="">Select</option>
		      <?php foreach ($missions as $m):?>
		      <option value="<?php echo $m->mission;?>"><?php echo $m->mission;?></option>
		      <?php endforeach;?>
		  </select>
        </div>
	</div>

	<!-- Night? -->
	<div class="form-group">
		<label class="col-md-4 control-label">Day / Night</label>
		<div class="col-md-8">
			<label class="radio-inline"><input name="night" type="radio" value="0"> Day </label>
			<label class="radio-inline"><input name="night" type="radio" value="1"> Night</label>
	   </div>
	</div>

        <div class="col-md-offset-4 col-md-4">
			<input type="submit" class="btn btn-primary input-md" value="Find">
        </div>

	
</fieldset>
<?php echo form_close(); ?>
<?php
$this->load->view('templates/footer');
?>