<?php

$app['database']->insert('locations', [
    'location' => $_POST['location'],
]);

header('Location: /');