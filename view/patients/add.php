<h1>Add patient</h1>
<form action="<?= URL ?>patients/addSave" method="post">
	<label>Patient name</label><input type="text" name="Name"><br>
	<label>Species</label>
	<select name="specie">
		<?php foreach ($species as $specie) { ?>
			<option value="<?= $specie['species_id'] ?>"><?= $specie['species_description'] ?></option>
		<?php } ?>
	</select><br>
	<label>Gender</label><input autocomplete="off" type="radio" name="gender" value="Man"> Man
	<input type="radio" name="gender" value="Vrouw">Vrouw<br>
	<label>Status</label><input type="text" name="Status"><br>
	<label>Client</label>
	<select name="client">
	<?php foreach ($clients as $client) { ?>
		<option value="<?= $client['client_id'] ?>"><?= $client['client_firstname'] . ' ' . $client['client_lastname'] ?></option>
	<?php } ?>
	</select><br>
	<input type="submit" value="Submit">
</form>	