	<h2>Species</h2>
	<table>
		<thead>
			<tr>
				<th>Description</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
		<?php foreach($species as $specie) { ?>
			<tr>
				<td><?= $specie['species_description']?></td>
				<td class="center"><a href="<?php echo URL . 'species/edit/' . $specie['species_id']; ?>">edit</a></td>
				<td class="center"><a href="<?php echo URL . 'species/delete/' . $specie['species_id']; ?>">delete</a></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
		<p><a href="<?= URL ?>species/add">Add species</a></p>