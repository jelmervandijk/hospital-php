<h1>Edit specie</h1>
<form action="<?= URL ?>species/editSave" method="post">
	<label>Species</label><input type="text" name="species" value="<?= $specie['species_description']?>">
	<input type="submit" value="Submit">
	<input type="hidden" name="id" value="<?= $specie['species_id'] ?>">
</form>