<?php

require_once 'helper.php';

$cleanedUrl = str_replace('/project', '', $_SERVER['REQUEST_URI']);


require basePath('router.php');
