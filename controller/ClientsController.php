<?php

require(ROOT . 'model/ClientsModel.php');

function index() {
	render('clients/index', array(
		'clients' => getAllClients()
		));
}

function add() {
	render('clients/add');
}

function addSave() {
	if (!addClient()) {
		header('Location:' . URL . 'error/index');
		exit();
	}
	header('Location:' . URL . 'clients/index');
}

function delete($id) {
	if (!deleteClient($id)) {
		header('Location:' . URL . 'error/index');
		exit();
	}
	header('Location:' . URL . 'clients/index');
}

function edit($id) {
	render('clients/edit', array(
		'client' => getclient($id)
		));
}

function editSave($id) {
	if (!editClient()) {
		header('Location:' . URL . 'error/index');
		exit();
	}
	header('Location:' . URL . 'clients/index');
}