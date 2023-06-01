<?php 

// Route par défaut 
// PATTERN : / 
// ACTION : home 
// VIEW : pages.home

include_once "../app/controllers/pagesController.php";
App\Controllers\PagesController\HomeAction($connexion);