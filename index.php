<?php

require_once 'database/Connection.php';
require_once 'database/QueryBuilder.php';
require_once 'Task.php';

$pdo = Connection::make();
$query = new QueryBuilder($pdo);

$tasks = $query->selectAll('todos');

require_once 'index.view.php';