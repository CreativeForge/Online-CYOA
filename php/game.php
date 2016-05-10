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
	
	// Include library files
	require_once 'Includes.php';
	
	// POST arguments
	$task = trim($_POST['task']);
	
	// User logged in?
	if(SessionController::getSessionID() !== false)
	{
		// Open database
		$link = DatabaseController::connect();
		
		$player = new Player(SessionController::getSessionID());
		$player->loadData($link);
		
		$dc = new DatabaseController($link);
		
		// Resolve task
		switch($task)
		{
			// Start game
			case 'start':
				// Able to start game
				if($player->finished)
				{
					$player->finished = false;
					
					echo json_encode($dc->getRow('story', array('id' => 'start')));
				}
				break;
			
			default:
				break;
		}
		
		unset($dc);
		
		// Close database
		DatabaseController::disconnect();
		unset($link);
	}
	
	exit();
	
?>