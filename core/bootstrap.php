<?php

$app = [];
$app['config'] = require 'config.php';

require 'core/router.php';
require 'core/Request.php';
require 'functions.php';
require 'core/database/connection.php';
require 'core/database/QueryBuilder.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);
// or
// $pdo = Connection::make();
// $query = new QueryBuilder($pdo);
