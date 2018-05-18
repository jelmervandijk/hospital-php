<?php

function getAllClients() {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM clients";
	$query = $db->prepare($sql);
	$query->execute();
	$db=null;
	return $query->fetchAll();
}

function addClient() {
	$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
	$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;

	if (strlen($firstname) == 0 || strlen($lastname) == 0) {
		return false;
	}

	$db = openDatabaseConnection();
	$sql = "INSERT INTO clients(client_firstname, client_lastname) VALUES (:firstname, :lastname)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':firstname'=>$firstname,
		':lastname'=>$lastname
		));
	$db = null;
	return true;
}

function deleteClient($id = null) {
	if (!$id) {
		return false;
	}
	$db = openDatabaseConnection();
	$sql = "DELETE FROM clients WHERE client_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));
	$db = null;
	return true;
}

function getClient($id) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM clients WHERE client_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));
	$db = null;
	return $query->fetch();
}

function editClient() {
	$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
	$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;

	if (strlen($firstname) == 0 || strlen($lastname) == 0) {
		return false;
	}
	$db = openDatabaseConnection();
	$sql = "UPDATE clients SET client_firstname = :firstname, client_lastname = :lastname WHERE client_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':firstname' => $firstname,
		':lastname' => $lastname,
		':id' => $id));
	$db = null;
	return true;
}