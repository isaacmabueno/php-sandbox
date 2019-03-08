<?php

require 'Task.php';
require 'functions.php';

$pdo = connectToDb();

$tasks = runAllTasks($pdo);

require 'index.view.php';

 ?>
