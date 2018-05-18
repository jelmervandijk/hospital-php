<?php

require(ROOT . 'model/PatientsModel.php');
require(ROOT . 'model/HomeModel.php');

function index() {
		render('patients/index', array(
		'patients' => getAllPatients(),
		));
}

function add() {
	render('patients/add', array(
		'species' => getAllSpecies(),
		'clients' => getAllClients(),
		));
}

function addSave() {
	if (!addPatient()) {
		header('Location:' . URL . 'error/index');
		exit();
	}
	header('Location:' . URL . 'patients/index');
}

function delete($id) {
	if (!deletePatient($id)) {
		header('Location:' . URL . 'error/index');
		exit();
	}
	header('Location:' . URL . 'patients/index');
}

function edit($id) {
	render('patients/edit', array(
		'species' => getAllSpecies(),
		'clients' => getAllClients(),
		'patient' => getPatient($id)
		));
}

function editSave() {
	if (!editPatient($id)) {
		header('Location:' . URL . 'error/index');
		exit();
	}
	header('Location:' . URL . 'patients/index');
}