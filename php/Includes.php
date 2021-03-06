<?php
/**
*
* This file is part of the 'Online Choose your own Adventure' MultiOil (working title).
*
* University of the Arts Zurich (Switzerland)
* Game Design 2016
* Task: Writing and producing an Online CYOA, including own illustrations.
*
* @copyright (c) University of the Arts Zurich
*
* Author(s):
* Arno Justus
* Julian Schoenbaechler
* Marcel Arioli
* Michael von Ah
*
*/
	namespace CYOA_Engine;
	
	// Error reporting
	error_reporting(1);
	ini_set('display_errors', E_ALL);
	
	// Includes
	require_once 'Constants.php';
	require_once 'Database.php';
	require_once 'classes/DatabaseController.php';
	require_once 'classes/SessionController.php';
	require_once 'classes/Player.php';
	require_once 'classes/Story.php';

?>
