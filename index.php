<?php
require_once('lib/Dispatcher.php');
require_once('lib/View.php');
require_once('lib/Model.php');
require_once('lib/formbuilder/FormBuilder.php');

$dispatcher = new Dispatcher();
$dispatcher->dispatch();
