<?php
$this->load->view('templates/header');
$this->load->view('templates/navbar');
$this->load->view('templates/sidebar');
?>

<table class="table table-bordered table-striped table-condensed">
	<tr align="center" class="warning">
		<td rowspan="3">Date</td>
		<td rowspan="3">Aircraft</td>
		<td rowspan="3">Number</td>
		<td rowspan="3">1st Pilot</td>
		<td rowspan="3">2nd Pilot</td>
		<td rowspan="3">Mission</td>
		<td rowspan="3">Route</td>
		<td colspan="4">Single Engine</td>
		<td colspan="4">Multi Engine</td>
		<td colspan="2" rowspan="2">Instrument Flying</td>
	</tr>
	<tr align="center" class="warning">
		<td colspan="2">Day</td>
		<td colspan="2">Night</td>
		<td colspan="2">Day</td>
		<td colspan="2">Night</td>
	</tr>
	<tr align="center" class="warning">
		<td>1st Pilot</td>
		<td>2nd Pilot</td>
		<td>1st Pilot</td>
		<td>2nd Pilot</td>
		<td>1st Pilot</td>
		<td>2nd Pilot</td>
		<td>1st Pilot</td>
		<td>2nd Pilot</td>
		<td>Act</td>
		<td>Sim</td>
	</tr>
	<?php
    $sdph_1 = 0;
    $sdph_2 = 0;
    $sdpm_1 = 0;
    $sdpm_2 = 0;
    $snph_1 = 0;
    $snph_2 = 0;
    $snpm_1 = 0;
    $snpm_2 = 0;
    $mdph_1 = 0;
    $mdph_2 = 0;
    $mdpm_1 = 0;
    $mdpm_2 = 0;
    $mnph_1 = 0;
    $mnph_2 = 0;
    $mnpm_1 = 0;
    $mnpm_2 = 0;
    $rsdph_1 = 0;
    $rsdph_2 = 0;
    $rsdpm_1 = 0;
    $rsdpm_2 = 0;
    $rsnph_1 = 0;
    $rsnph_2 = 0;
    $rsnpm_1 = 0;
    $rsnpm_2 = 0;
    $rmdph_1 = 0;
    $rmdph_2 = 0;
    $rmdpm_1 = 0;
    $rmdpm_2 = 0;
    $rmnph_1 = 0;
    $rmnph_2 = 0;
    $rmnpm_1 = 0;
    $rmnpm_2 = 0;
    $tah = 0;
    $tam = 0;
    $tsh = 0;
    $tsm = 0;
    $rtah = 0;
    $rtam = 0;
    $rtsh = 0;
    $rtsm = 0;
    ?>
	<?php foreach ($results as $result):?>
	   <tr>
		<td><?php echo $result->dt; ?>
		      <a href="<?php echo site_url('home/del/'.$result->id);?>"><span class="glyphicon glyphicon-trash"></span></a></td>
		<td><?php echo $result->ac_name; ?></td>
		<td><?php echo $result->ac_num; ?></td>
		<td><?php echo $result->pilot_1; ?></td>
		<td><?php echo $result->pilot_2; ?></td>
		<td><?php echo $result->mission; ?></td>
		<td><?php echo $result->route; ?></td>
		<td><?php if (($result->multi_eng == 0) && ($result->night == 0)) {$sdph_1 += $result->hr_1; $sdpm_1 += $result->min_1; echo $result->hr_1 .":". $result->min_1;} ?></td>
		<td><?php if (($result->multi_eng == 0) && ($result->night == 0)) {$sdph_2 += $result->hr_2; $sdpm_2 += $result->min_2; echo $result->hr_2 .":". $result->min_2;} ?></td>
		<td><?php if (($result->multi_eng == 0) && ($result->night == 1)) {$snph_1 += $result->hr_1; $snpm_1 += $result->min_1; echo $result->hr_1 .":". $result->min_1;} ?></td>
		<td><?php if (($result->multi_eng == 0) && ($result->night == 1)) {$snph_2 += $result->hr_2; $snpm_2 += $result->min_2; echo $result->hr_2 .":". $result->min_2;} ?></td>
		<td><?php if (($result->multi_eng == 1) && ($result->night == 0)) {$mdph_1 += $result->hr_1; $mdpm_1 += $result->min_1; echo $result->hr_1 .":". $result->min_1;} ?></td>
		<td><?php if (($result->multi_eng == 1) && ($result->night == 0)) {$mdph_2 += $result->hr_2; $mdpm_1 += $result->min_2; echo $result->hr_2 .":". $result->min_2;} ?></td>
		<td><?php if (($result->multi_eng == 1) && ($result->night == 1)) {$mnph_1 += $result->hr_1; $mnpm_1 += $result->min_1; echo $result->hr_1 .":". $result->min_1;} ?></td>
		<td><?php if (($result->multi_eng == 1) && ($result->night == 1)) {$mnph_2 += $result->hr_2; $mnpm_2 += $result->min_2; echo $result->hr_2 .":". $result->min_2;} ?></td>
		<td><?php $tah += $result->act_hr; $tam += $result->act_min; echo $result->act_hr .":". $result->act_min; ?></td>
		<td><?php $tsh += $result->sim_hr; $tsm += $result->sim_min; echo $result->sim_hr .":". $result->sim_min; ?></td>
		<!-- hrs calc -->
        <?php 
        if (($result->rotor == 1) && ($result->multi_eng == 0) && ($result->night == 0)) {$rsdph_1 += $result->hr_1; $rsdpm_1 += $result->min_1;}
        if (($result->rotor == 1) && ($result->multi_eng == 0) && ($result->night == 0)) {$rsdph_2 += $result->hr_2; $rsdpm_2 += $result->min_2;}
        if (($result->rotor == 1) && ($result->multi_eng == 0) && ($result->night == 1)) {$rsnph_1 += $result->hr_1; $rsnpm_1 += $result->min_1;}
        if (($result->rotor == 1) && ($result->multi_eng == 0) && ($result->night == 1)) {$rsnph_2 += $result->hr_2; $rsnpm_2 += $result->min_2;}
        if (($result->rotor == 1) && ($result->multi_eng == 1) && ($result->night == 0)) {$rmdph_1 += $result->hr_1; $rmdpm_1 += $result->min_1;}
        if (($result->rotor == 1) && ($result->multi_eng == 1) && ($result->night == 0)) {$rmdph_2 += $result->hr_2; $rmdpm_2 += $result->min_2;}
        if (($result->rotor == 1) && ($result->multi_eng == 1) && ($result->night == 1)) {$rmnph_1 += $result->hr_1; $rmnpm_1 += $result->min_1;}
        if (($result->rotor == 1) && ($result->multi_eng == 1) && ($result->night == 1)) {$rmnph_2 += $result->hr_2; $rmnpm_2 += $result->min_2;}
        if ($result->rotor == 1) {$rtah += $result->act_hr; $rtam += $result->act_min;}
        if ($result->rotor == 1) {$rtsh += $result->act_hr; $rtsm += $result->act_min;}
        ?>
	</tr>
	<?php endforeach;?>
	<!-- View total row  -->
	<?php function calc_hr($h, $m)
	{
	    $mm = $m % 60;
	    $hh = floor($m/60) + $h;
	    if (($hh == 0) && ($mm == 0)) { echo "";} else {echo $hh .':'. $mm;}
	}
	?>
	<tr class="success">
	   <td colspan="7" align="right">TOTAL:</td>
	   <td><?php calc_hr($sdph_1, $sdpm_1); ?></td>
	   <td><?php calc_hr($sdph_2, $sdpm_2); ?></td>
	   <td><?php calc_hr($snph_1, $snpm_1); ?></td>
	   <td><?php calc_hr($snph_2, $snpm_2); ?></td>
	   <td><?php calc_hr($mdph_1, $mdpm_1); ?></td>
	   <td><?php calc_hr($mdph_2, $mdpm_2); ?></td>
	   <td><?php calc_hr($mnph_1, $mnpm_1); ?></td>
	   <td><?php calc_hr($mnph_2, $mnpm_2); ?></td>
	   <td><?php calc_hr($tah, $tam); ?></td>
	   <td><?php calc_hr($tsh, $tsm); ?></td>
	</tr>
	<tr class="danger">
	   <td colspan="7" align="right">ROTOR:</td>
	   <td><?php calc_hr($rsdph_1, $rsdpm_1); ?></td>
	   <td><?php calc_hr($rsdph_2, $rsdpm_2); ?></td>
	   <td><?php calc_hr($rsnph_1, $rsnpm_1); ?></td>
	   <td><?php calc_hr($rsnph_2, $rsnpm_2); ?></td>
	   <td><?php calc_hr($rmdph_1, $rmdpm_1); ?></td>
	   <td><?php calc_hr($rmdph_2, $rmdpm_2); ?></td>
	   <td><?php calc_hr($rmnph_1, $rmnpm_1); ?></td>
	   <td><?php calc_hr($rmnph_2, $rmnpm_2); ?></td>
	   <td><?php calc_hr($rtah, $rtam); ?></td>
	   <td><?php calc_hr($rtsh, $rtsm); ?></td>
	</tr>
</table>

</div>
</div>
</body>
</html>