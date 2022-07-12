<?php

$action = !empty($_REQUEST['action']) ? $_REQUEST['action'] : null;

switch ($action){
    default:
        require('view/landingPageView.php');
        break;
}