<?php

require_once __DIR__.'/factory/EyeFactory.php';
require_once __DIR__.'/Eye.php';

$eyeFactory = new EyeFactory();
?><br/><?php
var_dump($eyeFactory);


?><br/><?php 


$eyeFactory = new Factory\EyeFactory();
?><br/><?php 
var_dump($eyeFactory);