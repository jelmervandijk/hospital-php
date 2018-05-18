	<h2>Patiënts</h2>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Gender</th>
				<th>Status</th>
				<th>Client</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
		<?php foreach ($patients as $patient) { ?>
			<tr>
				<td><?= $patient['patient_name']?></td>
				<td><?= $patient['species_description']?></td>
				<td><?= $patient['patient_gender'] ?></td>
				<td><?= $patient['patient_status']?></td>
				<td><?= $patient['client_firstname'] . ' ' . $patient['client_lastname']?></td>
				<td class="center"><a href="<?php echo URL . 'patients/edit/' . $patient['patient_id']; ?>">edit</a></td>
				<td class="center"><a href="<?php echo URL . 'patients/delete/' . $patient['patient_id']; ?>">delete</a></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
		<p><a href="<?= URL ?>patients/add">Add patient</a></p>