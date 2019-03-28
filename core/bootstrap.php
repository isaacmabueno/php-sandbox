<?php

$config = require 'config.php';
require 'core/router.php';
require 'functions.php';
require 'core/database/connection.php';
require 'core/database/QueryBuilder.php';

return new QueryBuilder(
    Connection::make($config['database'])
);
// or
// $pdo = Connection::make();
// $query = new QueryBuilder($pdo);
