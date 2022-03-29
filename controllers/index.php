<?php

$locations = $app['database']->selectAll('locations');

require_once 'views/index.view.php';