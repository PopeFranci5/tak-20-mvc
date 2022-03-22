<?php

$query = require_once 'bootstrap.php';

require_once 'Task.php';

$tasks = $query->selectAll('todos');

require_once 'index.view.php';