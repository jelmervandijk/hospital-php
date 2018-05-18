	<h2>Cliënts</h2>
	<table>
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
		<?php foreach($clients as $client) { ?>
			<tr>
				<td><?= $client['client_firstname']?></td>
				<td><?= $client['client_lastname']?></td>
				<td class="center"><a href="<?php echo URL . 'clients/edit/' . $client['client_id']; ?>">edit</a></td>
				<td class="center"><a href="<?php echo URL . 'clients/delete/' . $client['client_id']; ?>">delete</a></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
		<p><a href="<?= URL ?>clients/add">Add client</a></p>