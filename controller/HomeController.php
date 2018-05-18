<?php

require(ROOT . 'model/HomeModel.php');

function index() {
	render('home/index', array(
		'patients' => getAllPatients()
		));
}