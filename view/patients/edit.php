<h1>Edit patient</h1>
<form action="<?= URL ?>patients/editSave" method="post">
	<label>Patient name</label><input type="text" name="Name" value="<?= $patient['patient_name'] ?>"><br>
	<label>Species</label>
	<select name="specie">
		<?php foreach ($species as $specie) { ?>
			<option value="<?= $specie['species_id'] ?>" <?php if ($patient['species_id'] == $specie['species_id']) { echo 'selected'; } ?>><?= $specie['species_description'] ?></option>
		<?php } ?>
	</select><br>
	<label>Gender</label><input type="radio" name="gender" value="Man" <?php if ($patient['patient_gender'] == 'Man'){ echo 'checked'; } ?>> Man
	<input type="radio" name="gender" value="Vrouw" <?php if ($patient['patient_gender'] == 'Vrouw'){ echo 'checked'; } ?>>Vrouw<br>
	<label>Status</label><input type="text" name="Status" value="<?= $patient['patient_status'] ?>"><br>
	<label>Client</label>
	<select name="client">
	<?php foreach ($clients as $client) { ?>
		<option value="<?= $client['client_id'] ?>" <?php if ($patient['client_id'] == $client['client_id']) { echo 'selected'; } ?>><?= $client['client_firstname'] . ' ' . $client['client_lastname'] ?></option>
	<?php } ?>
	</select><br>
	<input type="submit" value="Submit">
	<input type="hidden" name="id" value="<?= $patient['patient_id'] ?>">
</form>