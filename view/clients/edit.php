<h1>Edit client</h1>
<form action="<?= URL ?>clients/editSave/<?= $client['client_id'] ?>" method="post">
	<label>Firstname</label><input type="text" name="firstname" value="<?= $client['client_firstname'] ?>"><br>
	<label>Lastname</label><input type="text" name="lastname" value="<?= $client['client_lastname'] ?>"><br>
	<input type="submit" value="Submit">
	<input type="hidden" name="id"  value="<?= $client['client_id'] ?>">
</form>