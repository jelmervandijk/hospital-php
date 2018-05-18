<?php

function getAllPatients() {
	$db = openDatabaseConnection();
	$sql = "SELECT `patients`.*, `species`.`species_description`, `clients`.`client_firstname`, `clients`.`client_lastname`
		FROM `patients` 
		INNER JOIN `species` ON `patients`.`species_id` = `species`.`species_id`
		INNER JOIN  `clients` ON `patients`.`client_id` = `clients`.`client_id`";
	$query = $db->prepare($sql);
	$query->execute();
	$db=null;
	return $query->fetchAll();
}