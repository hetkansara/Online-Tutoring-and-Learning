<?php
require_once 'utilities/Session.php';

//Initialize the session
$sessionData = Session::getInstance();
$sessionData -> destroy();